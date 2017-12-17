<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseFamilyRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $family = new Family(
            FamilyCode::createFromString('complete_family_code'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            [
                AttributeCode::createFromString('attribute_as_label_code'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            AttributeCode::createFromString('attribute_as_label_code')
        );

        $familyWithoutAttributeAsLabel = new Family(
            FamilyCode::createFromString('family_code_without_label'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            [
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            null
        );

        $familyWithoutAttribute = new Family(
            FamilyCode::createFromString('family_code_without_attribute'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            [
            ],
            null
        );

        $attributeAsLabel = new Attribute(
            AttributeCode::createFromString('attribute_as_label_code'),
            'pim_catalog_text',
            false,
            true
        );

        $attribute1 = new Attribute(
            AttributeCode::createFromString('attribute_code_1'),
            'pim_catalog_text',
            false,
            true
        );

        $attribute2 = new Attribute(
            AttributeCode::createFromString('attribute_code_2'),
            'pim_catalog_text',
            false,
            true
        );

        $this->persistAttributeInDatabase($attributeAsLabel);
        $this->persistAttributeInDatabase($attribute1);
        $this->persistAttributeInDatabase($attribute2);
        $this->persistFamilyInDatabase($family);
        $this->persistFamilyInDatabase($familyWithoutAttributeAsLabel);
        $this->persistFamilyInDatabase($familyWithoutAttribute);
    }

    public function test_with_code_on_persisted_family_with_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('complete_family_code'));
        Assert::assertNotNull($family);
        Assert::assertEquals('complete_family_code', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(3, $family->attributeCodes());
        Assert::assertEquals('attribute_as_label_code', $family->attributeCodes()[0]->getValue());
        Assert::assertEquals('attribute_code_1', $family->attributeCodes()[1]->getValue());
        Assert::assertEquals('attribute_code_2', $family->attributeCodes()[2]->getValue());
        Assert::assertTrue($family->hasAttributeAsLabel());
        Assert::assertEquals('attribute_as_label_code', $family->attributeAsLabelCode()->getValue());
    }

    public function test_with_code_on_persisted_family_without_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_label'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code_without_label', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(2, $family->attributeCodes());
        Assert::assertEquals('attribute_code_1', $family->attributeCodes()[0]->getValue());
        Assert::assertEquals('attribute_code_2', $family->attributeCodes()[1]->getValue());
        Assert::assertFalse($family->hasAttributeAsLabel());
        Assert::assertNull($family->attributeAsLabelCode());
    }

    public function test_with_code_on_persisted_family_without_attribute()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_attribute'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code_without_attribute', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(0, $family->attributeCodes());
        Assert::assertFalse($family->hasAttributeAsLabel());
        Assert::assertNull($family->attributeAsLabelCode());
    }

    public function test_with_code_on_non_existing_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('foo'));
        Assert::assertNull($family);
    }

    private function persistFamilyInDatabase(Family $family): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $attributeAsLabelId = null;
        if ($family->hasAttributeAsLabel()) {
            $attributeAsLabelId = $this->attributeIdFromCode($family->attributeAsLabelCode());
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_family (code, created, updated, label_attribute_id)
            VALUES (:code, :created, :updated, :label_attribute_id)
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->bindValue('label_attribute_id', $attributeAsLabelId, Type::INTEGER);
        $stmt->execute();

        $familyId = $this->familyIdFromCode($family->code());
        foreach ($family->attributeCodes() as $attributeCode) {
            $attributeId = $this->attributeIdFromCode($attributeCode);
            $sql = <<<SQL
            INSERT INTO pim_catalog_family_attribute (family_id, attribute_id)
VALUES (:family_id, :attribute_id)
SQL;
            $stmt = $entityManager->getConnection()->prepare($sql);
            $stmt->bindValue('family_id', $familyId, Type::INTEGER);
            $stmt->bindValue('attribute_id', $attributeId, Type::INTEGER);
            $stmt->execute();
        }
    }

    private function persistAttributeInDatabase(Attribute $attribute): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_attribute (
                code, 
                attribute_type, 
                is_localizable,
                is_scopable, 
                sort_order, 
                is_required,
                is_unique,
                entity_type,
                backend_type,
                created,
                updated
            )
            VALUES (
                :code,
                :attribute_type,
                :is_localizable,
                :is_scopable,
                :sort_order,
                :is_required,
                :is_unique,
                :entity_type,
                :backend_type,
                :created,
                :updated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attribute->code()->getValue(), Type::STRING);
        $stmt->bindValue('attribute_type', $attribute->type(), Type::STRING);
        $stmt->bindValue('is_localizable', $attribute->localizable(), Type::BOOLEAN);
        $stmt->bindValue('is_scopable', $attribute->scopable(), Type::BOOLEAN);
        $stmt->bindValue('sort_order', 1, Type::INTEGER);
        $stmt->bindValue('is_required', true, Type::BOOLEAN);
        $stmt->bindValue('is_unique', true, Type::BOOLEAN);
        $stmt->bindValue('entity_type', 'Pim\Component\Catalog\Model\Product', Type::STRING);
        $stmt->bindValue('backend_type', 'text', Type::STRING);
        $stmt->bindValue('created', new \DateTime(), Type::DATETIME);
        $stmt->bindValue('updated', new \DateTime(), Type::DATETIME);
        $stmt->execute();
    }

    private function attributeIdFromCode(AttributeCode $attributeCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_attribute WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attributeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function familyIdFromCode(FamilyCode $familyCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_family WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $familyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
