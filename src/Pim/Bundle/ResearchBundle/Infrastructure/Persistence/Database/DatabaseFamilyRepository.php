<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

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
                f.code, 
                f.created, 
                f.updated,
                a_label.code as attribute_as_label_code,
                a_image.code as attribute_as_image_code,
                attributes.attributes,
                attribute_requirements.channel_code,
                attribute_requirements.attribute_requirements,
                ft.locale as locale_of_label,
                ft.label 
            FROM pim_catalog_family f
            LEFT JOIN pim_catalog_attribute a_label on a_label.id = f.label_attribute_id
            LEFT JOIN pim_catalog_attribute a_image on a_image.id = f.image_attribute_id
            LEFT JOIN pim_catalog_family_translation ft on ft.foreign_key = f.id
            LEFT JOIN (
                SELECT 
                    f.id as family_attribute_id, 
                    GROUP_CONCAT(DISTINCT a.code SEPARATOR '|') as attributes
                FROM pim_catalog_family f
                JOIN pim_catalog_family_attribute fa on fa.family_id = f.id
                JOIN pim_catalog_attribute a on a.id = fa.attribute_id
                GROUP BY f.id
            ) as attributes on attributes.family_attribute_id = f.id
            LEFT JOIN (
                SELECT
                    f.id as family_attribute_id,
                    c.code as channel_code, 
                    GROUP_CONCAT(DISTINCT a.code SEPARATOR '|') as attribute_requirements
                FROM pim_catalog_family f
                JOIN pim_catalog_attribute_requirement r on r.family_id = f.id 
                JOIN pim_catalog_channel c on c.id = r.channel_id and r.required = '1'
                JOIN pim_catalog_attribute a on a.id = r.attribute_id
                GROUP BY f.id, c.code
            ) as attribute_requirements on attribute_requirements.family_attribute_id = f.id 
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
        $attributeAsImageCode = Type::getType(Type::STRING)->convertToPhpValue($rows[0]['attribute_as_image_code'], $platform);

        $attributeCodes = [];
        $attributeCodesList = Type::getType(Type::STRING)->convertToPhpValue($rows[0]['attributes'], $platform);
        if (isset($attributeCodesList)) {
            foreach (explode('|', $attributeCodesList) as $attributeCode) {
                $attributeCodes[] = AttributeCode::createFromString($attributeCode);
            }
        }

        $attributeRequirements = [];
        $labels =[];
        foreach ($rows as $row) {
            $channel = Type::getType(Type::STRING)->convertToPhpValue($row['channel_code'], $platform);
            if (null !== $channel && !isset($attributeRequirements[$channel])) {

                $attributeRequirementCodes = [];
                $attributeRequirementCodesList = Type::getType(Type::STRING)->convertToPhpValue($row['attribute_requirements'], $platform);
                if (null !== $attributeRequirementCodesList) {
                    foreach (explode('|', $attributeRequirementCodesList) as $attributeRequirementCode) {
                        $attributeRequirementCodes[] = AttributeCode::createFromString($attributeRequirementCode);
                    }
                }

                $attributeRequirements[$channel] = AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString($channel),
                    $attributeRequirementCodes
                );
            }

            $labelLocaleCode = Type::getType(Type::STRING)->convertToPhpValue($row['locale_of_label'], $platform);
            if (null !== $labelLocaleCode && !isset($labels[$labelLocaleCode])) {
                $label = Type::getType(Type::STRING)->convertToPhpValue($row['label'], $platform);
                $labels[$labelLocaleCode] = FamilyLabel::createFromLocaleCode(LocaleCode::createFromString($labelLocaleCode), $label);
            }
        }

        return new Family(
            $familyCode,
            $created,
            $updated,
            null !== $attributeAsLabelCode ? AttributeCode::createFromString($attributeAsLabelCode) : null,
            null !== $attributeAsImageCode ? AttributeCode::createFromString($attributeAsImageCode) : null,
            $attributeCodes,
            array_values($attributeRequirements),
            array_values($labels)
        );
    }
}
