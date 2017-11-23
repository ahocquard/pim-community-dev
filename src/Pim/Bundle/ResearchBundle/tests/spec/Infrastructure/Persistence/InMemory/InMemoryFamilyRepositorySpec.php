<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;

class InMemoryFamilyRepositorySpec extends ObjectBehavior
{
    function let(Family $family)
    {
        $family->code()->willReturn(FamilyCode::createFromString('family_code_1'));
        $this->add($family);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryFamilyRepository::class);
    }

    function it_gets_a_family_with_code($family)
    {
        $this->withCode(FamilyCode::createFromString('family_code_1'))->shouldReturn($family);
    }

    function it_returns_null_when_family_is_not_found()
    {
        $this->withCode(FamilyCode::createFromString('family_code_2'))->shouldReturn(null);
    }
}
