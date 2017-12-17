<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;

class InMemoryAttributeRepositorySpec extends ObjectBehavior
{
    function let(Attribute $attribute1, Attribute $attribute2)
    {
        $attribute1->code()->willReturn(AttributeCode::createFromString('attribute_code_1'));
        $attribute2->code()->willReturn(AttributeCode::createFromString('attribute_code_2'));
        $this->add($attribute1);
        $this->add($attribute2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryAttributeRepository::class);
    }

    function it_gets_an_attribute_with_code($attribute1)
    {
        $this->withCode(AttributeCode::createFromString('attribute_code_1'))->shouldReturn($attribute1);
    }

    function it_returns_null_when_attribute_is_not_found()
    {
        $this->withCode(AttributeCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_attributes_with_codes($attribute1, $attribute2)
    {
        $this->withCodes([
            AttributeCode::createFromString('attribute_code_1'),
            AttributeCode::createFromString('attribute_code_2')
        ])->shouldReturn([$attribute1, $attribute2]);
    }

    function it_returns_empty_array_when_no_attribute_found()
    {
        $this->withCodes([
            AttributeCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
