<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;

class InMemoryFamilyRepositorySpec extends ObjectBehavior
{
    function let(Family $computer, Family $tshirt)
    {
        $computer->code()->willReturn(FamilyCode::createFromString('computer'));
        $tshirt->code()->willReturn(FamilyCode::createFromString('tshirt'));
        $this->add($computer);
        $this->add($tshirt);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryFamilyRepository::class);
    }

    function it_gets_a_family_with_code($computer)
    {
        $this->withCode(FamilyCode::createFromString('computer'))->shouldReturn($computer);
    }

    function it_returns_null_when_family_is_not_found()
    {
        $this->withCode(FamilyCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_families_with_codes($computer, $tshirt)
    {
        $this->withCodes([
            FamilyCode::createFromString('computer'),
            FamilyCode::createFromString('tshirt')
        ])->shouldReturn([$computer, $tshirt]);
    }

    function it_returns_empty_array_when_no_channel_found()
    {
        $this->withCodes([
            FamilyCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
