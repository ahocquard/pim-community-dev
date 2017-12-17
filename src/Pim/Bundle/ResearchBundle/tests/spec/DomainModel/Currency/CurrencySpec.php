<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Currency;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;

class CurrencySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            CurrencyCode::createFromString('code'),
            true
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Currency::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(CurrencyCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_whether_it_is_enabled()
    {
        $this->enabled()->shouldReturn(true);
    }
}
