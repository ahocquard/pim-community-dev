<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseChannelRepository;
use Prophecy\Argument;

class DatabaseChannelRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseChannelRepository::class);
    }

    function it_gets_a_complete_channel_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['channel_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'channel_code',
                'currency_codes' => '["EUR", "USD"]',
                'locale_codes' => '["locale_code_1", "locale_code_2"]',
                'translations' => '[{"locale":"locale_code_1", "label":"label_1"},{"locale":"locale_code_2", "label":"label_2"}]'
            ]
        ]);

        $this
            ->withCode(ChannelCode::createFromString('channel_code'))
            ->shouldBeLike(
                 new Channel(
                    ChannelCode::createFromString('channel_code'),
                    [
                        LocaleCode::createFromString('locale_code_1'),
                        LocaleCode::createFromString('locale_code_2'),
                    ],
                    [
                        CurrencyCode::createFromString('EUR'),
                        CurrencyCode::createFromString('USD'),
                    ],
                    [
                        ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_1'), 'label_1'),
                        ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_2'), 'label_2')
                    ]
                )
            );
    }

    function it_returns_null_when_channel_is_not_found($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['channel_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);
        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCode(ChannelCode::createFromString('channel_code'))
            ->shouldReturn(null);
    }

    function it_gets_channels_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['channel_code_1', 'channel_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'channel_code_1',
                'currency_codes' => '["EUR", "USD"]',
                'locale_codes' => '["locale_code_1", "locale_code_2"]',
                'translations' => '[{"locale":"locale_code_1", "label":"label_1"},{"locale":"locale_code_2", "label":"label_2"}]'
            ],
            [
                'code' => 'channel_code_2',
                'currency_codes' => '["EUR"]',
                'locale_codes' => '["locale_code_2", "locale_code_3"]',
                'translations' => '[{"locale":null, "label":null}]'
            ],
        ]);

        $this
            ->withCodes([
                ChannelCode::createFromString('channel_code_1'),
                ChannelCode::createFromString('channel_code_2'),
            ])
            ->shouldBeLike([
                new Channel(
                    ChannelCode::createFromString('channel_code_1'),
                    [
                        LocaleCode::createFromString('locale_code_1'),
                        LocaleCode::createFromString('locale_code_2'),
                    ],
                    [
                        CurrencyCode::createFromString('EUR'),
                        CurrencyCode::createFromString('USD'),
                    ],
                    [
                        ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_1'), 'label_1'),
                        ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_2'), 'label_2')
                    ]
                ),
                new Channel(
                    ChannelCode::createFromString('channel_code_2'),
                    [
                        LocaleCode::createFromString('locale_code_2'),
                        LocaleCode::createFromString('locale_code_3'),
                    ],
                    [
                        CurrencyCode::createFromString('EUR'),
                    ],
                    []
                )
            ]);
    }

    function it_returns_an_empty_array_when_channels_are_not_found($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['channel_code_1', 'channel_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCodes([
                ChannelCode::createFromString('channel_code_1'),
                ChannelCode::createFromString('channel_code_2'),
            ])
            ->shouldBeLike([]);

    }
}
