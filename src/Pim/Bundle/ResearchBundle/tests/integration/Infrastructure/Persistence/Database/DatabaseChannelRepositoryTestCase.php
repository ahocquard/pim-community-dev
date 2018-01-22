<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
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
        (new ResetDatabase($entityManager))();

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

        $channelLoader = new ChannelLoader($entityManager);
        $channelLoader->load($completeChannel);
        $channelLoader->load($channelWithoutCurrency);
        $channelLoader->load($channelWithoutLocale);
        $channelLoader->load($channelWithoutLabel);
    }

    public function test_with_code_on_persisted_channel()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_complete'));
        Assert::assertNotNull($channel);
        Assert::assertEquals('channel_code_complete', $channel->code()->getValue());
        Assert::assertCount(2, $channel->currencyCodes());
        Assert::assertEquals('EUR', $channel->currencyCodes()[0]->getValue());
        Assert::assertEquals('USD', $channel->currencyCodes()[1]->getValue());
        Assert::assertCount(2, $channel->localeCodes());
        Assert::assertEquals('locale_code_1', $channel->localeCodes()[0]->getValue());
        Assert::assertEquals('locale_code_2', $channel->localeCodes()[1]->getValue());
        Assert::assertCount(2, $channel->labels());
        Assert::assertEquals('label_1', $channel->labels()[0]->value());
        Assert::assertEquals('label_2', $channel->labels()[1]->value());
        Assert::assertEquals('locale_code_1', $channel->labels()[0]->localeCode()->getValue());
        Assert::assertEquals('locale_code_2', $channel->labels()[1]->localeCode()->getValue());
    }

    public function test_with_code_on_persisted_channel_without_currency()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_currency'));
        Assert::assertNotNull($channel);
        Assert::assertEquals('channel_code_without_currency', $channel->code()->getValue());
        Assert::assertCount(0, $channel->currencyCodes());
        Assert::assertCount(2, $channel->localeCodes());
        Assert::assertEquals('locale_code_1', $channel->localeCodes()[0]->getValue());
        Assert::assertEquals('locale_code_2', $channel->localeCodes()[1]->getValue());
        Assert::assertCount(2, $channel->labels());
        Assert::assertEquals('label_1', $channel->labels()[0]->value());
        Assert::assertEquals('label_2', $channel->labels()[1]->value());
        Assert::assertEquals('locale_code_1', $channel->labels()[0]->localeCode()->getValue());
        Assert::assertEquals('locale_code_2', $channel->labels()[1]->localeCode()->getValue());
    }

    public function test_with_code_on_persisted_channel_without_locale()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_locale'));
        Assert::assertNotNull($channel);
        Assert::assertEquals('channel_code_without_locale', $channel->code()->getValue());
        Assert::assertCount(2, $channel->currencyCodes());
        Assert::assertEquals('EUR', $channel->currencyCodes()[0]->getValue());
        Assert::assertEquals('USD', $channel->currencyCodes()[1]->getValue());
        Assert::assertCount(0, $channel->localeCodes());
        Assert::assertCount(2, $channel->labels());
        Assert::assertEquals('label_1', $channel->labels()[0]->value());
        Assert::assertEquals('label_2', $channel->labels()[1]->value());
        Assert::assertEquals('locale_code_1', $channel->labels()[0]->localeCode()->getValue());
        Assert::assertEquals('locale_code_2', $channel->labels()[1]->localeCode()->getValue());
    }

    public function test_with_code_on_persisted_channel_without_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('channel_code_without_label'));
        Assert::assertNotNull($channel);
        Assert::assertEquals('channel_code_without_label', $channel->code()->getValue());
        Assert::assertCount(2, $channel->currencyCodes());
        Assert::assertEquals('EUR', $channel->currencyCodes()[0]->getValue());
        Assert::assertEquals('USD', $channel->currencyCodes()[1]->getValue());
        Assert::assertCount(2, $channel->localeCodes());
        Assert::assertEquals('locale_code_1', $channel->localeCodes()[0]->getValue());
        Assert::assertEquals('locale_code_2', $channel->localeCodes()[1]->getValue());
        Assert::assertCount(0, $channel->labels());
    }

    public function test_with_code_on_non_existing_channel()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.channel.channel_repository');

        $channel = $repository->withCode(ChannelCode::createFromString('foo'));
        Assert::assertNull($channel);
    }
}
