<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\AttributeLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\FamilyLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\ProductLoader;
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
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))->byDeletingRows();

        $attribute1 = new Attribute(
            AttributeCode::createFromString('attribute_code_1'),
            'pim_catalog_text',
            false,
            true
        );

        $family = new Family(
            FamilyCode::createFromString('family_code'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            null,
            null,
            [AttributeCode::createFromString('attribute_code_1')],
            [],
            []
        );

        $product = new Product(
            ProductIdentifier::createFromString('test_with_identifier'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            true,
            $family->code()
        );

        $attributeLoader = new AttributeLoader($entityManager);
        $attributeLoader->load($attribute1);

        $familyLoader = new FamilyLoader($entityManager);
        $familyLoader->load($family);

        $productLoader = new ProductLoader($entityManager);
        $productLoader->load($product);
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
}
