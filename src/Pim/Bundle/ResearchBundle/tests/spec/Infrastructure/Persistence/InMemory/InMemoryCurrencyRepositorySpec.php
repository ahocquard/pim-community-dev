<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryCurrencyRepository;

class InMemoryCurrencyRepositorySpec extends ObjectBehavior
{
    function let(Currency $currency1, Currency $currency2)
    {
        $currency1->code()->willReturn(CurrencyCode::createFromString('currency_code_1'));
        $currency2->code()->willReturn(CurrencyCode::createFromString('currency_code_2'));
        $this->add($currency1);
        $this->add($currency2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryCurrencyRepository::class);
    }

    function it_gets_a_currency_with_code($currency1)
    {
        $this->withCode(CurrencyCode::createFromString('currency_code_1'))->shouldReturn($currency1);
    }

    function it_returns_null_when_currency_is_not_found()
    {
        $this->withCode(CurrencyCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_currencies_with_codes($currency1, $currency2)
    {
        $this->withCodes([
            CurrencyCode::createFromString('currency_code_1'),
            CurrencyCode::createFromString('currency_code_2')
        ])->shouldReturn([$currency1, $currency2]);
    }

    function it_returns_empty_array_when_no_currency_found()
    {
        $this->withCodes([
            CurrencyCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
