<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;

class InMemoryAttributeRepositorySpec extends ObjectBehavior
{
    function let(Attribute $attribute)
    {
        $attribute->code()->willReturn(AttributeCode::createFromString('attribute_code_1'));
        $this->add($attribute);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryAttributeRepository::class);
    }

    function it_gets_an_attribute_with_code($attribute)
    {
        $this->withCode(AttributeCode::createFromString('attribute_code_1'))->shouldReturn($attribute);
    }

    function it_returns_null_when_attribute_is_not_found()
    {
        $this->withCode(AttributeCode::createFromString('attribute_code_2'))->shouldReturn(null);
    }
}
