<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryProductRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FamilyFixtures
{
    /** @var ContainerInterface */
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function getFixtures()
    {
        $family = new Family(
            FamilyCode::createFromString('complete_family_code'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            AttributeCode::createFromString('attribute_as_label_code'),
            AttributeCode::createFromString('attribute_as_image_code'),
            [
                AttributeCode::createFromString('attribute_as_label_code'),
                AttributeCode::createFromString('attribute_as_image_code'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_1'),
                        AttributeCode::createFromString('attribute_code_2')
                    ]
                ),
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('tablet'),
                    [
                        AttributeCode::createFromString('attribute_code_1'),
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label'),
            ]
        );

        $familyWithoutAttributeAsLabel = new Family(
            FamilyCode::createFromString('family_code_without_label'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            null,
            AttributeCode::createFromString('attribute_as_image_code'),
            [
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_as_image_code'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_1')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
            ]
        );

        $familyWithoutAttributeAsImage = new Family(
            FamilyCode::createFromString('family_code_without_image'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            AttributeCode::createFromString('attribute_as_label_code'),
            null,
            [
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_as_label_code'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_1')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
            ]
        );

        $familyWithoutAttributeAndLabel = new Family(
            FamilyCode::createFromString('family_code_without_attribute_and_label'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            null,
            null,
            [],
            [],
            []
        );

        return [
            'complete_family' => $family,
            'family_without_attribute_and_label' => $familyWithoutAttributeAndLabel,
            'family_without_attribute_as_label' => $familyWithoutAttributeAsLabel,
            'family_without_attribute_as_image' => $familyWithoutAttributeAsImage,
        ];
    }
}
