<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Locale;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class LocaleSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            LocaleCode::createFromString('code'),
            true
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Locale::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(LocaleCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_whether_it_is_enabled()
    {
        $this->enabled()->shouldReturn(true);
    }
}
