<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryProductRepository;

class InMemoryProductRepositorySpec extends ObjectBehavior
{
    function let(Product $product)
    {
        $product->identifier()->willReturn(ProductIdentifier::createFromString('product_identifier_1'));
        $this->add($product);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryProductRepository::class);
    }

    function it_gets_a_product_with_identifier($product)
    {
        $this
            ->withIdentifier(ProductIdentifier::createFromString('product_identifier_1'))
            ->shouldReturn($product);
    }

    function it_returns_null_when_product_is_not_found()
    {
        $this
            ->withIdentifier(ProductIdentifier::createFromString('product_identifier_2'))
            ->shouldReturn(null);
    }
}
