<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class CategoryContext implements Context
{
    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(EntityFixtureLoader $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @Given /^the following categor(?:y|ies):$/
     */
    public function theFollowingCategories(TableNode $table): void
    {
        foreach ($table->getHash() as $data) {
            $labels = [];
            foreach ($data as $property => $value) {
                if (false !== strpos($property, 'label-') && '' !== $value) {
                    [$label, $locale] = explode('-', $property);

                    $labels[] = CategoryLabel::createFromLocaleCode(LocaleCode::createFromString($locale), $value);
                }
            }

            $parent = !empty($data['parent']) ? CategoryCode::createFromString($data['parent']) : null;
            $category = new Category(
                CategoryCode::createFromString($data['code']),
                $parent,
                $labels
            );

            $this->loader->load($category);
        }
    }
}
