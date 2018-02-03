<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\AttributeLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\CategoryLoader;
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

        $master = new Category(
            CategoryCode::createFromString('master'),
            null,
            []
        );

        $child = new Category(
            CategoryCode::createFromString('child'),
            CategoryCode::createFromString('master'),
            []
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

        $attributeLoader = new AttributeLoader($entityManager);
        $attributeLoader->load($attribute1);

        $categoryLoader = new CategoryLoader($entityManager);
        $categoryLoader->load($master);
        $categoryLoader->load($child);

        $familyLoader = new FamilyLoader($entityManager);
        $familyLoader->load($family);

        $productLoader = new ProductLoader($entityManager);
        $products = $this->productFixtures();
        foreach ($products as $product) {
            $productLoader->load($product);
        }
    }

    public function test_with_identifier_on_complete_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('complete_product'));
        Assert::assertEquals($this->productFixtures()['complete_product'], $product, '', 0.0, 10, true);
    }

    public function test_with_identifier_on_product_without_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('product_without_family'));
        Assert::assertEquals($this->productFixtures()['product_without_family'], $product, '', 0.0, 10, true);
    }

    public function test_with_identifier_on_product_without_categories()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('product_without_categories'));
        Assert::assertEquals($this->productFixtures()['product_without_categories'], $product, '', 0.0, 10, true);
    }

    public function test_with_identifier_on_non_existing_product()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.product.product_repository');

        $product = $repository->withIdentifier(ProductIdentifier::createFromString('foo'));
        Assert::assertNull($product);
    }

    private function productFixtures(): array
    {
        $completeProduct = new Product(
            ProductIdentifier::createFromString('complete_product'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            true,
            FamilyCode::createFromString('family_code'),
            [
                CategoryCode::createFromString('child'),
                CategoryCode::createFromString('master'),
            ]
        );

        $productWithoutFamily = new Product(
            ProductIdentifier::createFromString('product_without_family'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            true,
            null,
            [
                CategoryCode::createFromString('child'),
                CategoryCode::createFromString('master'),
            ]
        );

        $productWithoutCategories = new Product(
            ProductIdentifier::createFromString('product_without_categories'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            false,
            FamilyCode::createFromString('family_code'),
            []
        );

        return [
            'complete_product' => $completeProduct,
            'product_without_family' => $productWithoutFamily,
            'product_without_categories' => $productWithoutCategories
        ];
    }
}
