<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Product;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;

class ProductSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            ProductIdentifier::createFromString('identifier'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            true,
            FamilyCode::createFromString('family_code'),
            [
                CategoryCode::createFromString('category_1'),
                CategoryCode::createFromString('category_2'),
            ]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Product::class);
    }

    function it_returns_identifier()
    {
        $this->identifier()->shouldBeAnInstanceOf(ProductIdentifier::class);
        $this->identifier()->getValue()->shouldReturn('identifier');
    }

    function it_returns_created_date()
    {
        $this->created()->shouldBeLike(new \DateTime('2017-05-07T00:00:00+01:00'));
    }

    function it_returns_updated_date()
    {
        $this->updated()->shouldBeLike(new \DateTime('2017-05-08T00:00:00+01:00'));
    }

    function it_returns_whether_a_product_is_enable()
    {
        $this->isEnable()->shouldReturn(true);
    }

    function it_returns_family_code()
    {
        $this->familyCode()->shouldBeAnInstanceOf(FamilyCode::class);
        $this->familyCode()->getValue()->shouldReturn('family_code');
    }

    function it_returns_category_codes()
    {
        $this->categoryCodes()->shouldBeLike([
            CategoryCode::createFromString('category_1'),
            CategoryCode::createFromString('category_2'),
        ]);
    }
}
