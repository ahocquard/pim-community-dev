<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseAttributeRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $attribute1 = new Attribute(
            AttributeCode::createFromString('attribute_code_1'),
            'pim_catalog_text',
            false,
            true
        );

        $attribute2 = new Attribute(
            AttributeCode::createFromString('attribute_code_2'),
            'pim_catalog_boolean',
            true,
            false
        );

        $this->persistAttributeInDatabase($attribute1);
        $this->persistAttributeInDatabase($attribute2);
    }

    public function test_with_code_on_persisted_attribute()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.attribute.attribute_repository');

        $attribute = $repository->withCode(AttributeCode::createFromString('attribute_code_1'));
        Assert::assertNotNull($attribute);
        Assert::assertEquals('attribute_code_1', $attribute->code()->getValue());
        Assert::assertEquals('pim_catalog_text', $attribute->type());
        Assert::assertFalse($attribute->localizable());
        Assert::assertTrue($attribute->scopable());
    }

    public function test_with_code_on_non_existing_attribute()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.attribute.attribute_repository');

        $attribute = $repository->withCode(AttributeCode::createFromString('foo'));
        Assert::assertNull($attribute);
    }

    public function test_with_codes_on_persisted_attributes()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.attribute.attribute_repository');

        $attributes = $repository->withCodes([
            AttributeCode::createFromString('attribute_code_1'),
            AttributeCode::createFromString('attribute_code_2'),
        ]);
        Assert::assertNotNull($attributes);

        $attribute1 = $attributes[0];
        Assert::assertEquals('attribute_code_1', $attribute1->code()->getValue());
        Assert::assertEquals('pim_catalog_text', $attribute1->type());
        Assert::assertFalse($attribute1->localizable());
        Assert::assertTrue($attribute1->scopable());

        $attribute2 = $attributes[1];
        Assert::assertEquals('attribute_code_2', $attribute2->code()->getValue());
        Assert::assertEquals('pim_catalog_boolean', $attribute2->type());
        Assert::assertTrue($attribute2->localizable());
        Assert::assertFalse($attribute2->scopable());
    }

    public function test_with_codes_on_non_existing_attributes()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.attribute.attribute_repository');

        $attributes = $repository->withCodes([
            AttributeCode::createFromString('foo'),
        ]);
        Assert::assertEquals([], $attributes);
    }

    private function persistAttributeInDatabase(Attribute $attribute)
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
        $stmt->bindValue('entity_type', 'Pim\Component\Catalog\Model\Product\'', Type::STRING);
        $stmt->bindValue('backend_type', 'text', Type::STRING);
        $stmt->bindValue('created', new \DateTime(), Type::DATETIME);
        $stmt->bindValue('updated', new \DateTime(), Type::DATETIME);
        $stmt->execute();
    }
}
