<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;

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
            SELECT 
                f.created, 
                f.updated, 
                a.code as attribute_code, 
                a_label.code as attribute_as_label_code
            FROM pim_catalog_family f
            LEFT JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
            LEFT JOIN pim_catalog_attribute a on a.id = fa.attribute_id
            LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            WHERE f.code = :code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $familyCode->getValue());
        $stmt->execute();
        $rows = $stmt->fetchAll();

        if (empty($rows)) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $created = Type::getType(Type::DATETIME)->convertToPhpValue($rows[0]['created'], $platform);
        $updated = Type::getType(Type::DATETIME)->convertToPhpValue($rows[0]['updated'], $platform);
        $attributeAsLabelCode = Type::getType(Type::STRING)->convertToPhpValue($rows[0]['attribute_as_label_code'], $platform);

        $attributeCodes = [];
        foreach ($rows as $row) {
            if (isset($row['attribute_code'])) {
                $attributeCodes[] = AttributeCode::createFromString($row['attribute_code']);
            }
        }

        return new Family(
            $familyCode,
            $created,
            $updated,
            $attributeCodes,
            null !== $attributeAsLabelCode ? AttributeCode::createFromString($attributeAsLabelCode) : null
        );
    }
}
