<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Channel;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class ChannelSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            ChannelCode::createFromString('code'),
            [LocaleCode::createFromString('locale_code')],
            [CurrencyCode::createFromString('currency_code')],
            [ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Channel::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(ChannelCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_locale_codes()
    {
        $this->localeCodes()->shouldBeLike([LocaleCode::createFromString('locale_code')]);
    }

    function it_returns_currency_codes()
    {
        $this->currencyCodes()->shouldBeLike([CurrencyCode::createFromString('currency_code')]);
    }

    function it_returns_labels()
    {
        $this->labels()->shouldBeLike([new ChannelLabel(LocaleCode::createFromString('en_US'), 'foo')]);
    }
}
