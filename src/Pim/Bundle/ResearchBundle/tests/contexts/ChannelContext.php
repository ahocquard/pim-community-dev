<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class ChannelContext implements Context
{
    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(EntityFixtureLoader $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @Given /^the following channels?:$/
     */
    public function theFollowingChannel(TableNode $table): void
    {
        foreach ($table->getHash() as $data) {
            $locales = isset($data['locales']) ? explode(',', $data['locales']) : [];
            $localesCodes = array_map(function ($locale) {
                return LocaleCode::createFromString($locale);
            }, $locales);

            $currencies = isset($data['currencies']) ? explode(',', $data['currencies']) : [];
            $currencyCodes = array_map(function ($currency) {
                return CurrencyCode::createFromString($currency);
            }, $currencies);

            $labels = [];
            foreach ($data as $property => $value) {
                if (false !== strpos($property, 'label-')) {
                    [$label, $locale] = explode('-', $property);

                    $labels[] = ChannelLabel::createFromLocaleCode(LocaleCode::createFromString($locale), $value);
                }
            }

            $channel = new Channel(
                ChannelCode::createFromString($data['code']),
                $localesCodes,
                $currencyCodes,
                $labels
            );

            $this->loader->load($channel);
        }
    }
}
