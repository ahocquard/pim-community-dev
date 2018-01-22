<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class CategoryLoader implements EntityFixtureLoader
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function load($category): void
    {
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        foreach ($category->labels() as $label) {
            $stmt->bindValue('category_id_foreign_key', $this->categoryIdFromCode($category->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function categoryIdFromCode(CategoryCode $categoryCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_category WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $categoryCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
