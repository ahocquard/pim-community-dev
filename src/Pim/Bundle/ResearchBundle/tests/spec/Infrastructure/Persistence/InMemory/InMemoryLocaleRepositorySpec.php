<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryLocaleRepository;

class InMemoryLocaleRepositorySpec extends ObjectBehavior
{
    function let(Locale $locale1, Locale $locale2)
    {
        $locale1->code()->willReturn(LocaleCode::createFromString('locale_code_1'));
        $locale2->code()->willReturn(LocaleCode::createFromString('locale_code_2'));
        $this->add($locale1);
        $this->add($locale2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryLocaleRepository::class);
    }

    function it_gets_an_locale_with_code($locale1)
    {
        $this->withCode(LocaleCode::createFromString('locale_code_1'))->shouldReturn($locale1);
    }

    function it_returns_null_when_locale_is_not_found()
    {
        $this->withCode(LocaleCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_locales_with_codes($locale1, $locale2)
    {
        $this->withCodes([
            LocaleCode::createFromString('locale_code_1'),
            LocaleCode::createFromString('locale_code_2')
        ])->shouldReturn([$locale1, $locale2]);
    }

    function it_returns_empty_array_when_no_locale_found()
    {
        $this->withCodes([
            LocaleCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
