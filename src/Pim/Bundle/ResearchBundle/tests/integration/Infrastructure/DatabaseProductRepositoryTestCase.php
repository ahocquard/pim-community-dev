<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure;

use Akeneo\Test\Integration\Configuration;
use Akeneo\Test\IntegrationTestsBundle\Loader\DatabaseSchemaHandler;
use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ApiBundle\tests\integration\ApiTestCase;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseProductRepository;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;

class DatabaseProductRepositoryTestCase extends KernelTestCase
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
            FamilyId::createFromString('1'),
            FamilyCode::createFromString('family_code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00')
        );

        $product = new Product(
            ProductId::createFromString('1'),
            ProductIdentifier::createFromString('test_with_identifier'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            true,
            $family->code()
        );

        $this->persistFamilyInDatabase($family);
        $this->persistProductInDatabase($product);
    }

    public function test_with_identifier_on_persisted_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.infrastructure.persistence.database.database_product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('test_with_identifier'));
        Assert::assertNotNull($product);
        Assert::assertEquals('1', $product->id()->getValue());
        Assert::assertEquals('test_with_identifier', $product->identifier()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+01:00'), $product->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+01:00'), $product->updated());
        Assert::assertEquals(true, $product->isEnable());
        Assert::assertEquals('family_code', $product->family()->getValue());
    }

    public function test_with_identifier_on_non_existing_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.infrastructure.persistence.database.database_product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('foo'));
        Assert::assertNull($product);
    }

    private function persistFamilyInDatabase(Family $family)
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
INSERT INTO pim_catalog_family (id, code, created, updated)
VALUES (:id, :code, :created, :updated)
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('id', $family->id()->getValue(), Type::INTEGER);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->execute();
    }

    private function persistProductInDatabase(Product $product)
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
INSERT INTO pim_catalog_product (id, identifier, created, updated, is_enabled, raw_values, product_type, family_id)
SELECT :id, :identifier, :created, :updated, :is_enabled, "{}", "product", id
FROM pim_catalog_family
WHERE code = :family_code
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('id', $product->id()->getValue(), Type::INTEGER);
        $stmt->bindValue('identifier', $product->identifier()->getValue(), Type::STRING);
        $stmt->bindValue('created', $product->created(), Type::DATETIME);
        $stmt->bindValue('updated', $product->updated(), Type::DATETIME);
        $stmt->bindValue('is_enabled', true, Type::BOOLEAN);
        $stmt->bindValue('family_code', $product->family()->getValue(), Type::STRING);
        $stmt->execute();
    }
}
