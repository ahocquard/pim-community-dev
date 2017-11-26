<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Attribute;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;

class AttributeSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            AttributeCode::createFromString('code'),
            'type',
            true,
            false
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Attribute::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(AttributeCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_type()
    {
        $this->type()->shouldReturn('type');
    }

    function it_returns_whether_it_is_localizable()
    {
        $this->localizable()->shouldReturn(true);
    }

    function it_returns_whether_it_is_scopable()
    {
        $this->scopable()->shouldReturn(false);
    }
}
