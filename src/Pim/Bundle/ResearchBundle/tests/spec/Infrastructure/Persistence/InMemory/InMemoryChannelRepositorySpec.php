<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryChannelRepository;

class InMemoryChannelRepositorySpec extends ObjectBehavior
{
    function let(Channel $channel)
    {
        $channel->code()->willReturn(ChannelCode::createFromString('channel_code_1'));
        $this->add($channel);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryChannelRepository::class);
    }

    function it_gets_a_channel_with_code($channel)
    {
        $this->withCode(ChannelCode::createFromString('channel_code_1'))->shouldReturn($channel);
    }

    function it_returns_null_when_channel_is_not_found()
    {
        $this->withCode(ChannelCode::createFromString('channel_code_2'))->shouldReturn(null);
    }
}
