<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class AttributeContext implements Context
{
    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(EntityFixtureLoader $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @Given /^the following attributes?:$/
     */
    public function theFollowingAttribute(TableNode $table): void
    {
        foreach ($table->getHash() as $data) {
            $localizable = isset($data['localizable']) ? filter_var($data['localizable'], FILTER_VALIDATE_BOOLEAN) : false;
            $scopable = isset($data['scopable']) ? filter_var($data['scopable'], FILTER_VALIDATE_BOOLEAN): false;

            $attribute = new Attribute(
                AttributeCode::createFromString($data['code']),
                $data['type'],
                $localizable,
                $scopable
            );

            $this->loader->load($attribute);
        }
    }
}
