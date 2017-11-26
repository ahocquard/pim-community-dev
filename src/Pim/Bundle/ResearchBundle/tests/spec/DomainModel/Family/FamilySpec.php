<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Family;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;

class FamilySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            FamilyCode::createFromString('code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00')
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
}
