<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseCategoryRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $locale1 = new Locale(LocaleCode::createFromString('fr_FR'), true);
        $locale2 = new Locale(LocaleCode::createFromString('en_US'), true);

        $rootCategory = new Category(
            CategoryCode::createFromString('root_category'),
            null,
            [
                CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
                CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label')
            ]
        );

        $childCategory = new Category(
            CategoryCode::createFromString('child_category'),
            CategoryCode::createFromString('root_category'),
            []
        );

        $this->persistLocaleInDatabase($locale1);
        $this->persistLocaleInDatabase($locale2);
        $this->persistCategoryInDatabase($rootCategory);
        $this->persistCategoryInDatabase($childCategory);
    }

    public function test_with_code_on_persisted_root_category()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.category.category_repository');

        $category = $repository->withCode(CategoryCode::createFromString('root_category'));
        Assert::assertNotNull($category);
        Assert::assertEquals('root_category', $category->code()->getValue());
        Assert::assertNull($category->parentCode());
        Assert::assertCount(2, $category->labels());
        Assert::assertEquals('US label', $category->labels()[0]->value());
        Assert::assertEquals('FR label', $category->labels()[1]->value());
        Assert::assertEquals('en_US', $category->labels()[0]->localeCode()->getValue());
        Assert::assertEquals('fr_FR', $category->labels()[1]->localeCode()->getValue());
    }

    public function test_with_code_on_persisted_child_category()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.category.category_repository');

        $category = $repository->withCode(CategoryCode::createFromString('child_category'));
        Assert::assertNotNull($category);
        Assert::assertEquals('child_category', $category->code()->getValue());
        Assert::assertNotNull($category->parentCode());
        Assert::assertEquals('root_category', $category->parentCode()->getValue());
        Assert::assertCount(0, $category->labels());
    }

    public function test_with_code_on_non_existing_category()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.category.category_repository');

        $category = $repository->withCode(CategoryCode::createFromString('foo'));
        Assert::assertNull($category);
    }

    private function persistCategoryInDatabase(Category $category): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_category (
                code,
                parent_id, 
                created,
                root,
                lvl,
                lft,
                rgt
            )
            VALUES (
                :code,
                :parent_id,
                '2018-01-07 19:27:59',
                0,
                0,
                0,
                0
            )
SQL;

        $parentId = null;
        if (!$category->isRoot()) {
            $parentId = $this->categoryIdFromCode($category->parentCode());
        }

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $category->code()->getValue(), Type::STRING);
        $stmt->bindValue('parent_id', $parentId, Type::INTEGER);
        $stmt->execute();

        $sql = <<<SQL
            INSERT INTO pim_catalog_category_translation (
                foreign_key,
                label,
                locale 
            )
            VALUES (
                :category_id_foreign_key,
                :label,
                :locale
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($category->labels() as $label) {
            $stmt->bindValue('category_id_foreign_key', $this->categoryIdFromCode($category->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function persistLocaleInDatabase(Locale $locale): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_locale(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $locale->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $locale->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }

    private function categoryIdFromCode(CategoryCode $categoryCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_category WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $categoryCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
