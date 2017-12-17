<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseProductRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $family = new Family(
            FamilyCode::createFromString('family_code'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            [
                AttributeCode::createFromString('attribute_code_as_label'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            AttributeCode::createFromString('attribute_code_as_label')
        );

        $product = new Product(
            ProductIdentifier::createFromString('test_with_identifier'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            true,
            $family->code()
        );

        $this->persistFamilyInDatabase($family);
        $this->persistProductInDatabase($product);
    }

    public function test_with_identifier_on_persisted_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('test_with_identifier'));
        Assert::assertNotNull($product);
        Assert::assertEquals('test_with_identifier', $product->identifier()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $product->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $product->updated());
        Assert::assertEquals(true, $product->isEnable());
        Assert::assertEquals('family_code', $product->family()->getValue());
    }

    public function test_with_identifier_on_non_existing_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('foo'));
        Assert::assertNull($product);
    }

    private function persistFamilyInDatabase(Family $family): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_family (code, created, updated)
            VALUES (:code, :created, :updated)
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->execute();
    }

    private function persistProductInDatabase(Product $product): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_product (identifier, created, updated, is_enabled, raw_values, product_type, family_id)
            SELECT :identifier, :created, :updated, :is_enabled, "{}", "product", id
            FROM pim_catalog_family
            WHERE code = :family_code
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('identifier', $product->identifier()->getValue(), Type::STRING);
        $stmt->bindValue('created', $product->created(), Type::DATETIME);
        $stmt->bindValue('updated', $product->updated(), Type::DATETIME);
        $stmt->bindValue('is_enabled', true, Type::BOOLEAN);
        $stmt->bindValue('family_code', $product->family()->getValue(), Type::STRING);
        $stmt->execute();
    }
}
