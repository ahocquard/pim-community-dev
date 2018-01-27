<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\AttributeLoader;
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
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))->byDeletingRows();

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

        $attributeLoader = new AttributeLoader($entityManager);
        $attributeLoader->load($attribute1);
        $attributeLoader->load($attribute2);
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
}
