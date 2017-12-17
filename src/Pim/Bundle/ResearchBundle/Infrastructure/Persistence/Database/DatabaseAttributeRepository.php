<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;

class DatabaseAttributeRepository implements AttributeRepository
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

    public function withCode(AttributeCode $attributeCode): ?Attribute
    {
        $sql = <<<SQL
            SELECT a.attribute_type, a.is_localizable, a.is_scopable 
            FROM pim_catalog_attribute a
            WHERE a.code = :code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attributeCode->getValue());
        $stmt->execute();
        $row = $stmt->fetch();

        if (false === $row) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $type = Type::getType(Type::STRING)->convertToPhpValue($row['attribute_type'], $platform);
        $localizable = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_localizable'], $platform);
        $scopable = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_scopable'], $platform);

        return new Attribute(
            $attributeCode,
            $type,
            $localizable,
            $scopable
        );
    }

    public function withCodes(array $attributeCodes): array
    {
        $sql = <<<SQL
            SELECT a.code, a.attribute_type, a.is_localizable, a.is_scopable 
            FROM pim_catalog_attribute a
            WHERE a.code IN (:codes)
SQL;

        $connection = $this->entityManager->getConnection();
        $codes = array_map(function(AttributeCode $attributeCode) {
            return $attributeCode->getValue();
        }, $attributeCodes);

        $stmt = $connection->executeQuery($sql,
            ['codes' => $codes],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        );

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $rows = $stmt->fetchAll();

        $attributes = [];
        foreach ($rows as $row) {
            $code = Type::getType(Type::STRING)->convertToPhpValue($row['code'], $platform);
            $type = Type::getType(Type::STRING)->convertToPhpValue($row['attribute_type'], $platform);
            $localizable = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_localizable'], $platform);
            $scopable = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_scopable'], $platform);

            $attributes[] = new Attribute(
                AttributeCode::createFromString($code),
                $type,
                $localizable,
                $scopable
            );
        }

        return $attributes;
    }
}
