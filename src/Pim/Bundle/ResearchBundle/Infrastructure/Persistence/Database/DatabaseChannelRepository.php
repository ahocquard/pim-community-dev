<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class DatabaseChannelRepository implements ChannelRepository
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

    public function withCode(ChannelCode $channelCode): ?Channel
    {
        $sql = <<<SQL
			SELECT 
				c.code,
                currencies.currency_codes, 
                locales.locale_codes,
                JSON_ARRAYAGG(JSON_OBJECT('locale', ct.locale, 'label', ct.label)) as translations
            FROM pim_catalog_channel c
			LEFT JOIN (
                SELECT 
                    c.id as channel_currency_id, 
                    JSON_ARRAYAGG(cu.code) as currency_codes
                FROM pim_catalog_channel c
                JOIN pim_catalog_channel_currency cc on cc.channel_id = c.id
				JOIN pim_catalog_currency cu on cu.id = cc.currency_id
                GROUP BY c.id
            ) as currencies on currencies.channel_currency_id = c.id
			LEFT JOIN (
                SELECT 
                    c.id as channel_locale_id, 
                    JSON_ARRAYAGG(l.code) as locale_codes
                FROM pim_catalog_channel c
				JOIN pim_catalog_channel_locale cl on cl.channel_id = c.id
				JOIN pim_catalog_locale l on l.id = cl.locale_id
                GROUP BY c.id
            ) as locales on locales.channel_locale_id = c.id
            LEFT JOIN pim_catalog_channel_translation ct on ct.foreign_key = c.id
            WHERE c.code = :code
            GROUP BY c.code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue());
        $stmt->execute();
        $rows = $stmt->fetchAll();

        if (empty($rows)) {
            return null;
        }
        $row = $rows[0];

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $currencyCodes = [];

        if (isset($row['currency_codes'])) {
            $decodedCurrencyCodes = json_decode($row['currency_codes'], true);
            if (null !== $decodedCurrencyCodes) {
                foreach ($decodedCurrencyCodes as $currencyCode) {
                    $currencyCodes[] = CurrencyCode::createFromString($currencyCode);
                }
            }
        }

        $localeCodes = [];
        if (isset($row['locale_codes'])) {
            $decodedLocaleCodes = json_decode($row['locale_codes'], true);
            if (null !== $decodedLocaleCodes) {
                foreach ($decodedLocaleCodes as $localeCode) {
                    $localeCodes[] = LocaleCode::createFromString($localeCode);
                }
            }
        }

        $labels =[];
        $decodedTranslations = json_decode($row['translations'], true);
        foreach ($decodedTranslations as $translation) {
            if (isset($translation['locale'])) {
                $labels[] = ChannelLabel::createFromLocaleCode(LocaleCode::createFromString($translation['locale']), $translation['label']);
            }
        }

        return new Channel(
            $channelCode,
            $localeCodes,
            $currencyCodes,
            $labels
        );
    }
}
