<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class FamilyLoader implements EntityFixtureLoader
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

    public function load($family): void
    {
        $attributeAsLabelId = null;
        if ($family->hasAttributeAsLabel()) {
            $attributeAsLabelId = $this->attributeIdFromCode($family->attributeAsLabelCode());
        }

        $attributeAsImageId = null;
        if ($family->hasAttributeAsImage()) {
            $attributeAsImageId = $this->attributeIdFromCode($family->attributeAsImageCode());
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_family (
                code, 
                created, 
                updated, 
                label_attribute_id, 
                image_attribute_id
            )
            VALUES (
                :code,
                :created,
                :updated,
                :label_attribute_id,
                :image_attribute_id
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->bindValue('label_attribute_id', $attributeAsLabelId, Type::INTEGER);
        $stmt->bindValue('image_attribute_id', $attributeAsImageId, Type::INTEGER);
        $stmt->execute();

        $familyId = $this->familyIdFromCode($family->code());
        foreach ($family->attributeCodes() as $attributeCode) {
            $attributeId = $this->attributeIdFromCode($attributeCode);
            $sql = <<<SQL
                INSERT INTO pim_catalog_family_attribute (
                    family_id,
                    attribute_id
                )
                VALUES (
                    :family_id,
                    :attribute_id
                )
SQL;
            $stmt = $this->entityManager->getConnection()->prepare($sql);
            $stmt->bindValue('family_id', $familyId, Type::INTEGER);
            $stmt->bindValue('attribute_id', $attributeId, Type::INTEGER);
            $stmt->execute();
        }

        foreach ($family->attributeRequirements() as $attributeRequirement) {
            $sql = <<<SQL
                INSERT INTO pim_catalog_attribute_requirement (
                    family_id,
                    attribute_id,
                    channel_id,
                    required
                )
                VALUES (
                    :family_id,
                    :attribute_id,
                    :channel_id,
                    1
                )
SQL;

            $channelId = $this->channelIdFromCode($attributeRequirement->channelCode());
            foreach ($attributeRequirement->requiredAttributeCodes() as $attributeCode) {
                $stmt = $this->entityManager->getConnection()->prepare($sql);
                $attributeId = $this->attributeIdFromCode($attributeCode);
                $stmt->bindValue('family_id', $familyId, Type::INTEGER);
                $stmt->bindValue('attribute_id', $attributeId, Type::INTEGER);
                $stmt->bindValue('channel_id', $channelId, Type::INTEGER);
                $stmt->execute();
            }

        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_family_translation (
                foreign_key,
                label,
                locale 
            )
            VALUES (
                :family_id_foreign_key,
                :label,
                :locale
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        foreach ($family->labels() as $label) {
            $stmt->bindValue('family_id_foreign_key', $this->familyIdFromCode($family->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function attributeIdFromCode(AttributeCode $attributeCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_attribute WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attributeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function familyIdFromCode(FamilyCode $familyCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_family WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $familyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function channelIdFromCode(ChannelCode $channelCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_channel WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
