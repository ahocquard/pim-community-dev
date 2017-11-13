<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;

class DatabaseFamilyRepository implements FamilyRepository
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

    public function withCode(FamilyCode $familyCode): ?Family
    {
        $sql = <<<SQL
SELECT f.id, f.created, f.updated
FROM pim_catalog_family f
WHERE f.code = :code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $familyCode->getValue());
        $stmt->execute();
        $row = $stmt->fetch();

        if (false === $row) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $id = Type::getType(Type::STRING)->convertToPhpValue($row['id'], $platform);
        $created = Type::getType(Type::DATETIME)->convertToPhpValue($row['created'], $platform);
        $updated = Type::getType(Type::DATETIME)->convertToPhpValue($row['updated'], $platform);

        return new Family(
            FamilyId::createFromString($id),
            $familyCode,
            $created,
            $updated
        );
    }
}
