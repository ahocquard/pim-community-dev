<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class LocaleContext implements Context
{
    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(EntityFixtureLoader $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @Given /^the following locales?:$/
     */
    public function theFollowingLocale(TableNode $table): void
    {
        foreach ($table->getHash() as $data) {
            $activated = isset($data['activated']) ? filter_var($data['activated'], FILTER_VALIDATE_BOOLEAN) : false;

            $locale = new Locale(
                LocaleCode::createFromString($data['code']),
                $activated
            );

            $this->loader->load($locale);
        }
    }
}
