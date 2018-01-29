<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\ChannelLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\CurrencyLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\LocaleLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseChannelRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))->byDeletingRows();

        $locale1 = new Locale(LocaleCode::createFromString('locale_code_1'), false);
        $locale2 = new Locale(LocaleCode::createFromString('locale_code_2'), true);

        $localeLoader = new LocaleLoader($entityManager);
        $localeLoader->load($locale1);
        $localeLoader->load($locale2);

        $currency1 = new Currency(CurrencyCode::createFromString('EUR'), false);
        $currency2 = new Currency(CurrencyCode::createFromString('USD'), true);

        $currencyLoader = new CurrencyLoader($entityManager);
        $currencyLoader->load($currency1);
        $currencyLoader->load($currency2);

        $channelLoader = new ChannelLoader($entityManager);
        $channels = $this->channelFixtures();
        foreach ($channels as $channel) {
            $channelLoader->load($channel);
        }
    }

    public function test_with_code_on_persisted_channel()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_complete'));
        Assert::assertEquals($this->channelFixtures()['complete_channel'], $channel, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_channel_without_currency()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_currency'));
        Assert::assertEquals($this->channelFixtures()['channel_without_currency'], $channel, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_channel_without_locale()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_locale'));
        Assert::assertEquals($this->channelFixtures()['channel_without_locale'], $channel, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_channel_without_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_label'));
        Assert::assertEquals($this->channelFixtures()['channel_without_label'], $channel, '', 0.0, 10, true);
    }

    public function test_with_code_on_non_existing_channel()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('foo'));
        Assert::assertNull($channel);
    }

    public function test_with_codes_on_persisted_channels()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channels = $repository->withCodes([
            ChannelCode::createFromString('channel_code_complete'),
            ChannelCode::createFromString('channel_code_without_locale'),
            ChannelCode::createFromString('channel_code_without_currency'),
            ChannelCode::createFromString('channel_code_without_label'),
            ChannelCode::createFromString('foo'),
        ]);

        $expectedChannels= $this->channelFixtures();

        Assert::assertEquals(array_values($expectedChannels), $channels, '', 0.0, 10, true);
    }

    public function test_with_codes_on_non_existing_channels()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channels = $repository->withCodes([
            ChannelCode::createFromString('foo'),
            ChannelCode::createFromString('baz')
        ]);

        Assert::assertNotNull($channels);
        Assert::assertCount(0, $channels);
    }

    private function channelFixtures(): array
    {
        $completeChannel = new Channel(
            ChannelCode::createFromString('channel_code_complete'),
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
        );

        $channelWithoutLocale = new Channel(
            ChannelCode::createFromString('channel_code_without_locale'),
            [],
            [
                CurrencyCode::createFromString('EUR'),
                CurrencyCode::createFromString('USD'),
            ],
            [
                ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_1'), 'label_1'),
                ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_2'), 'label_2')
            ]
        );

        $channelWithoutCurrency = new Channel(
            ChannelCode::createFromString('channel_code_without_currency'),
            [
                LocaleCode::createFromString('locale_code_1'),
                LocaleCode::createFromString('locale_code_2'),
            ],
            [],
            [
                ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_1'), 'label_1'),
                ChannelLabel::createFromLocaleCode(LocaleCode::createFromString('locale_code_2'), 'label_2')
            ]
        );

        $channelWithoutLabel = new Channel(
            ChannelCode::createFromString('channel_code_without_label'),
            [
                LocaleCode::createFromString('locale_code_1'),
                LocaleCode::createFromString('locale_code_2'),
            ],
            [
                CurrencyCode::createFromString('EUR'),
                CurrencyCode::createFromString('USD'),
            ],
            []
        );

        return [
            'complete_channel' => $completeChannel,
            'channel_without_locale' => $channelWithoutLocale,
            'channel_without_label' => $channelWithoutLabel,
            'channel_without_currency' => $channelWithoutCurrency,
        ];
    }
}
