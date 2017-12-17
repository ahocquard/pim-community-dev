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
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $locale1 = new Locale(LocaleCode::createFromString('locale_code_1'), false);
        $locale2 = new Locale(LocaleCode::createFromString('locale_code_2'), true);
        $this->persistLocaleInDatabase($locale1);
        $this->persistLocaleInDatabase($locale2);

        $currency1 = new Currency(CurrencyCode::createFromString('EUR'), false);
        $currency2 = new Currency(CurrencyCode::createFromString('USD'), true);
        $this->persistCurrencyInDatabase($currency1);
        $this->persistCurrencyInDatabase($currency2);

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

        $this->persistChannelInDatabase($completeChannel);
        $this->persistChannelInDatabase($channelWithoutCurrency);
        $this->persistChannelInDatabase($channelWithoutLocale);
        $this->persistChannelInDatabase($channelWithoutLabel);
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

    private function persistChannelInDatabase(Channel $channel): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel (
                code,
                category_id, 
                conversionUnits
            )
            VALUES (
                :code,
                null,
                'a:0:{}'
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channel->code()->getValue(), Type::STRING);
        $stmt->execute();

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_currency (
                channel_id,
                currency_id
            )
            VALUES (
                :channel_id,
                :currency_id
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->currencyCodes() as $currencyCode) {
            $stmt->bindValue('channel_id', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('currency_id', $this->currencyIdFromCode($currencyCode), Type::INTEGER);
            $stmt->execute();
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_locale (
                channel_id,
                locale_id
            )
            VALUES (
                :channel_id,
                :locale_id
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->localeCodes() as $localeCode) {
            $stmt->bindValue('channel_id', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('locale_id', $this->localeIdFromCode($localeCode), Type::INTEGER);
            $stmt->execute();
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_translation (
                foreign_key,
                label,
                locale 
            )
            VALUES (
                :channel_id_foreign_key,
                :label,
                :locale
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->labels() as $label) {
            $stmt->bindValue('channel_id_foreign_key', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function persistLocaleInDatabase(Locale $locale): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_locale(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $locale->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $locale->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }

    private function persistCurrencyInDatabase(Currency $currency): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_currency(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currency->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $currency->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }

    private function localeIdFromCode(LocaleCode $localeCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_locale WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $localeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function currencyIdFromCode(CurrencyCode $currencyCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_currency WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currencyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function channelIdFromCode(ChannelCode $channelCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_channel WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
