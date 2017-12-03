<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryProductRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadFixtures
{
    /** @var ContainerInterface */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(): void
    {
        $this->container->set('pim_research.domain_model.attribute.attribute_repository', $this->getAttributeRepository());
        $this->container->set('pim_research.domain_model.family.family_repository', $this->getFamilyRepository());
        $this->container->set('pim_research.domain_model.product.product_repository', $this->getProductRepository());
    }

    private function getAttributeRepository(): AttributeRepository
    {
        $repository = new InMemoryAttributeRepository();

        $repository->add(
            $attribute = new Attribute(
                AttributeCode::createFromString('attribute_code'),
                'pim_catalog_text',
                false,
                true
            )
        );

        return $repository;
    }

    private function getFamilyRepository(): FamilyRepository
    {
        $repository = new InMemoryFamilyRepository();
        $repository->add(
            new Family(
                FamilyCode::createFromString('family_code'),
                new \DateTimeImmutable('2017-05-07T00:00:00+01:00'),
                new \DateTimeImmutable('2017-05-08T00:00:00+01:00'),
                AttributeCode::createFromString('attribute_code')
            )
        );

        return $repository;
    }

    private function getProductRepository(): ProductRepository
    {
        $repository = new InMemoryProductRepository();

        $repository->add(
            new Product(
                ProductIdentifier::createFromString('product_identifier'),
                new \DateTimeImmutable('2017-05-07T00:00:00+01:00'),
                new \DateTimeImmutable('2017-05-08T00:00:00+01:00'),
                true,
                FamilyCode::createFromString('family_code')
            )
        );

        return $repository;
    }
}
