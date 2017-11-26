<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Akeneo\Test\Integration\Configuration;
use Akeneo\Test\IntegrationTestsBundle\Loader\DatabaseSchemaHandler;
use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ApiBundle\tests\integration\ApiTestCase;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseProductRepository;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;

class DatabaseAttributeRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $databaseSchemaHandler = new DatabaseSchemaHandler(static::$kernel);
        $databaseSchemaHandler->reset();

        $attribute = new Attribute(
            AttributeCode::createFromString('attribute_code'),
            'pim_catalog_text',
            false,
            true
        );

        $this->persistAttributeInDatabase($attribute);
    }

    public function test_with_code_on_persisted_attribute()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.attribute_repository');

        $attribute = $repository->withCode(AttributeCode::createFromString('attribute_code'));
        Assert::assertNotNull($attribute);
        Assert::assertEquals('attribute_code', $attribute->code()->getValue());
        Assert::assertEquals('pim_catalog_text', $attribute->type());
        Assert::assertFalse($attribute->localizable());
        Assert::assertTrue($attribute->scopable());
    }

    public function test_with_code_on_non_existing_attribute()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.attribute_repository');

        $attribute = $repository->withCode(AttributeCode::createFromString('foo'));
        Assert::assertNull($attribute);
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
