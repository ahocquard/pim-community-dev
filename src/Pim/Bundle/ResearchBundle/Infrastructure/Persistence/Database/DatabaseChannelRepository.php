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
                cu.code as currency_code, 
                l.code as locale_code,
                ct.locale as locale_of_label,
                ct.label
            FROM pim_catalog_channel c
            LEFT JOIN pim_catalog_channel_currency cc on cc.channel_id = c.id
            LEFT JOIN pim_catalog_currency cu on cu.id = cc.currency_id
            LEFT JOIN pim_catalog_channel_locale cl on cl.channel_id = c.id
            LEFT JOIN pim_catalog_locale l on l.id = cl.locale_id
            LEFT JOIN pim_catalog_channel_translation ct on ct.foreign_key = c.id
            WHERE c.code = :code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue());
        $stmt->execute();
        $rows = $stmt->fetchAll();

        if (empty($rows)) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $currencyCodes = [];
        $localeCodes = [];
        $labels =[];
        foreach ($rows as $row) {
            if (isset($row['currency_code'])) {
                $currencyCode = Type::getType(Type::STRING)->convertToPhpValue($row['currency_code'], $platform);
                $currencyCodes[$currencyCode] = CurrencyCode::createFromString($currencyCode);
            }

            if (isset($row['locale_code'])) {
                $localeCode = Type::getType(Type::STRING)->convertToPhpValue($row['locale_code'], $platform);
                $localeCodes[$localeCode] = LocaleCode::createFromString($localeCode);
            }

            if (isset($row['locale_of_label'])) {
                $localeCode = Type::getType(Type::STRING)->convertToPhpValue($row['locale_of_label'], $platform);
                $label = Type::getType(Type::STRING)->convertToPhpValue($row['label'], $platform);
                $labels[$localeCode] = ChannelLabel::createFromLocaleCode(LocaleCode::createFromString($localeCode), $label);
            }
        }

        return new Channel(
            $channelCode,
            array_values($localeCodes),
            array_values($currencyCodes),
            array_values($labels)
        );
    }
}
