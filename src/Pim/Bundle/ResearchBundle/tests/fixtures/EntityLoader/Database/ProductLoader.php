<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class ProductLoader implements EntityFixtureLoader
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

    public function load($product): void
    {
        $sql = <<<SQL
            INSERT INTO pim_catalog_product (
                identifier,
                created,
                updated,
                is_enabled,
                raw_values,
                product_type,
                family_id
            )
            VALUES (
                :identifier,
                :created,
                :updated,
                :is_enabled,
                "{}",
                "product",
                :family_id
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $familyId = null !== $product->familyCode() ? $this->familyIdFromCode($product->familyCode()) : null;

        $stmt->bindValue('identifier', $product->identifier()->getValue(), Type::STRING);
        $stmt->bindValue('created', $product->created(), Type::DATETIME);
        $stmt->bindValue('updated', $product->updated(), Type::DATETIME);
        $stmt->bindValue('is_enabled', $product->isEnable(), Type::BOOLEAN);
        $stmt->bindValue('family_id', $familyId, Type::STRING);
        $stmt->execute();

        foreach ($product->categoryCodes() as $categoryCode) {
            $this->createCategoryAssociation($product->identifier(), $categoryCode);
        }
    }

    private function createCategoryAssociation(ProductIdentifier $identifier, CategoryCode $categoryCode): void
    {
        $productId = $this->productIdFromIdentifier($identifier);
        $categoryId = $this->categoryIdFromCode($categoryCode);
        $sql = <<<SQL
                INSERT INTO pim_catalog_category_product (
                    product_id,
                    category_id
                )
                VALUES (
                    :product_id,
                    :category_id
                )
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('product_id', $productId, Type::INTEGER);
        $stmt->bindValue('category_id', $categoryId, Type::INTEGER);
        $stmt->execute();
    }

    private function productIdFromIdentifier(ProductIdentifier $identifier): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_product WHERE identifier = :identifier
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('identifier', $identifier->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
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

    private function familyIdFromCode(FamilyCode $categoryCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_family WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $categoryCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
