<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryChannelRepository;

class InMemoryChannelRepositorySpec extends ObjectBehavior
{
    function let(Channel $ecommerce, Channel $tablet)
    {
        $ecommerce->code()->willReturn(ChannelCode::createFromString('ecommerce'));
        $tablet->code()->willReturn(ChannelCode::createFromString('tablet'));
        $this->add($ecommerce);
        $this->add($tablet);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryChannelRepository::class);
    }

    function it_gets_a_channel_with_code($ecommerce)
    {
        $this->withCode(ChannelCode::createFromString('ecommerce'))->shouldReturn($ecommerce);
    }

    function it_returns_null_when_channel_is_not_found()
    {
        $this->withCode(ChannelCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_channels_with_codes($ecommerce, $tablet)
    {
        $this->withCodes([
            ChannelCode::createFromString('ecommerce'),
            ChannelCode::createFromString('tablet')
        ])->shouldReturn([$ecommerce, $tablet]);
    }

    function it_returns_empty_array_when_no_channel_found()
    {
        $this->withCodes([
            ChannelCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
