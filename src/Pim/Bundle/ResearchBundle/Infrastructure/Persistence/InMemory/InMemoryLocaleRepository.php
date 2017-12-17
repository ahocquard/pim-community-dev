<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleRepository;

class InMemoryLocaleRepository implements LocaleRepository
{
    /** @var Locale[] */
    private $storage = [];

    public function withCode(LocaleCode $localeCode): ?Locale
    {
        return $this->storage[$localeCode->getValue()] ?? null;
    }

    public function withCodes(array $localeCodes): array
    {
        $locales = [];
        foreach ($localeCodes as $localeCode) {
            if (isset($this->storage[$localeCode->getValue()])) {
                $locales[] = $this->storage[$localeCode->getValue()];
            }
        }

        return $locales;
    }

    public function add(Locale $locale): void
    {
        $this->storage[$locale->code()->getValue()] = $locale;
    }
}
