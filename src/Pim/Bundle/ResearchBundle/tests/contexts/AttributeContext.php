<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class FamilyContext implements Context
{
    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(EntityFixtureLoader $loader)
    {
        $this->loader = $loader;
    }

    /**
     * @Given /^the following famil(?:y|ies):$/
     */
    public function theFollowingFamily(TableNode $table): void
    {
        foreach ($table->getHash() as $data) {
            $attributes = isset($data['attributes']) ? explode(',', $data['attributes']) : [];
            $attributeCodes = array_map(function ($attribute) {
                return AttributeCode::createFromString($attribute);
            }, $attributes);

            $attributeAsLabel = isset($data['attribute_as_label']) ?
                AttributeCode::createFromString($data['attribute_as_label']) : null;
            $attributeAsImage = isset($data['attribute_as_image']) ?
                AttributeCode::createFromString($data['attribute_as_image']) : null;

            $attributeRequirements = [];
            foreach ($data as $property => $value) {
                if (false !== strpos($property, 'requirements-')) {
                    [$requirement, $channel] = explode('-', $property);
                    $channel = ChannelCode::createFromString($channel);
                    $requiredAttributes = explode(',', $value);
                    $requiredAttributeCodes = array_map(function ($attribute) {
                        return AttributeCode::createFromString($attribute);
                    }, $requiredAttributes);

                    $attributeRequirements[] = AttributeRequirement::createFromChannelCode(
                        $channel,
                        $requiredAttributeCodes
                    );
                }
            }

            $labels = [];
            foreach ($data as $property => $value) {
                if (false !== strpos($property, 'label-')) {
                    [$label, $locale] = explode('-', $property);

                    $labels[] = FamilyLabel::createFromLocaleCode(LocaleCode::createFromString($locale), $value);
                }
            }

            $family = new Family(
                FamilyCode::createFromString('tshirt'),
                new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
                new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
                $attributeAsImage,
                $attributeAsLabel,
                $attributeCodes,
                $attributeRequirements,
                $labels
            );

            $this->loader->load($family);
        }
    }

    /**
     * @When I send the following request
     */
    public function sendRequest(string $request): void
    {
        var_dump($request);
    }

    /**
     * @Then I get the following response
     */
    public function receiveResponse(): void
    {

    }
}
