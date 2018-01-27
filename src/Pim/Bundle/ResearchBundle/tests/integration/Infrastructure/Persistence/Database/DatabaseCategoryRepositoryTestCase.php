<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\CategoryLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\LocaleLoader;
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
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))->byDeletingRows();

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

        $localeLoader = new LocaleLoader($entityManager);
        $localeLoader->load($locale1);
        $localeLoader->load($locale2);

        $categoryLoader = new CategoryLoader($entityManager);
        $categoryLoader->load($rootCategory);
        $categoryLoader->load($childCategory);
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
}
