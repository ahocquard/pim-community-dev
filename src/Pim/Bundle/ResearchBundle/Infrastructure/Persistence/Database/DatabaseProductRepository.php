<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;

class DatabaseProductRepository implements ProductRepository
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

    public function withIdentifier(ProductIdentifier $productIdentifier): ?Product
    {
        $sql = <<<SQL
SELECT p.created, p.updated, p.is_enabled, f.code as family_code
FROM pim_catalog_product p
JOIN pim_catalog_family f ON f.id = p.family_id
WHERE p.identifier = :identifier
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('identifier', $productIdentifier->getValue());
        $stmt->execute();
        $row = $stmt->fetch();

        if (false === $row) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $created = Type::getType(Type::DATETIME)->convertToPhpValue($row['created'], $platform);
        $updated = Type::getType(Type::DATETIME)->convertToPhpValue($row['updated'], $platform);
        $isEnabled = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_enabled'], $platform);
        $familyCode = Type::getType(Type::STRING)->convertToPhpValue($row['family_code'], $platform);

        return new Product(
            $productIdentifier,
            $created,
            $updated,
            $isEnabled,
            FamilyCode::createFromString($familyCode)
        );
    }
}
