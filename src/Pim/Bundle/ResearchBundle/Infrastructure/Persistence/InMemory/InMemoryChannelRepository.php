<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelRepository;

class InMemoryChannelRepository implements ChannelRepository
{
    /** @var Channel[] */
    private $storage = [];

    public function withCode(ChannelCode $channelCode): ?Channel
    {
        return $this->storage[$channelCode->getValue()] ?? null;
    }

    public function add(Channel $channel): void
    {
        $this->storage[$channel->code()->getValue()] = $channel;
    }
}
