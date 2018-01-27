<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
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
            INSERT INTO pim_catalog_product (identifier, created, updated, is_enabled, raw_values, product_type, family_id)
            SELECT :identifier, :created, :updated, :is_enabled, "{}", "product", id
            FROM pim_catalog_family
            WHERE code = :family_code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('identifier', $product->identifier()->getValue(), Type::STRING);
        $stmt->bindValue('created', $product->created(), Type::DATETIME);
        $stmt->bindValue('updated', $product->updated(), Type::DATETIME);
        $stmt->bindValue('is_enabled', true, Type::BOOLEAN);
        $stmt->bindValue('family_code', $product->family()->getValue(), Type::STRING);
        $stmt->execute();
    }
}
