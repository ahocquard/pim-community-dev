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

class DatabaseFamilyRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $databaseSchemaHandler = new DatabaseSchemaHandler(static::$kernel);
        $databaseSchemaHandler->reset();

        $family = new Family(
            FamilyCode::createFromString('family_code'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            AttributeCode::createFromString('attribute_code')
        );

        $attribute = new Attribute(
            AttributeCode::createFromString('attribute_code'),
            'pim_catalog_text',
            false,
            true
        );

        $this->persistAttributeInDatabase($attribute);
        $this->persistFamilyInDatabase($family);
    }

    public function test_with_code_on_persisted_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertEquals('attribute_code', $family->attributeAsLabel()->getValue());
    }

    public function test_with_code_on_non_existing_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('foo'));
        Assert::assertNull($family);
    }

    private function persistFamilyInDatabase(Family $family)
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
SELECT id FROM pim_catalog_attribute WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $family->attributeAsLabel()->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();
        $attributeAsLabelId = $row['id'];

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
