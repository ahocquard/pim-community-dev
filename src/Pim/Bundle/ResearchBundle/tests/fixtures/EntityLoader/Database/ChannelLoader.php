<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class ChannelLoader implements EntityFixtureLoader
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function load($channel): void
    {
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
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

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        foreach ($channel->labels() as $label) {
            $stmt->bindValue('channel_id_foreign_key', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function localeIdFromCode(LocaleCode $localeCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_locale WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $localeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function currencyIdFromCode(CurrencyCode $currencyCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_currency WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currencyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function channelIdFromCode(ChannelCode $channelCode): string
    {
        $sql = <<<SQL
            SELECT id FROM pim_catalog_channel WHERE code = :code
SQL;
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
