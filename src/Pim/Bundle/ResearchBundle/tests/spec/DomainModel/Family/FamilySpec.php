<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Family;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;

class FamilySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            FamilyCode::createFromString('code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            AttributeCode::createFromString('attribute_code')
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Family::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(FamilyCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_created_date()
    {
        $this->created()->shouldBeLike(new \DateTime('2017-05-07T00:00:00+01:00'));
    }

    function it_returns_updated_date()
    {
        $this->updated()->shouldBeLike(new \DateTime('2017-05-08T00:00:00+01:00'));
    }

    function it_returns_attribute_as_label()
    {
        $this->attributeAsLabel()->shouldBeAnInstanceOf(AttributeCode::class);
        $this->attributeAsLabel()->getValue()->shouldReturn('attribute_code');
    }
}
