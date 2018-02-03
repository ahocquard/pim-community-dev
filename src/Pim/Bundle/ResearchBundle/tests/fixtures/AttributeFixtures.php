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
        $tshirt = new Family(
            FamilyCode::createFromString('tshirt'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            AttributeCode::createFromString('name'),
            AttributeCode::createFromString('image'),
            [
                AttributeCode::createFromString('name'),
                AttributeCode::createFromString('image'),
                AttributeCode::createFromString('color'),
                AttributeCode::createFromString('size'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('color'),
                        AttributeCode::createFromString('size')
                    ]
                ),
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('tablet'),
                    [
                        AttributeCode::createFromString('color'),
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US tshirt'),
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR tshirt'),
            ]
        );

        $computer = new Family(
            FamilyCode::createFromString('computer'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            null,
            AttributeCode::createFromString('image'),
            [
                AttributeCode::createFromString('name'),
                AttributeCode::createFromString('image'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('name')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US computer'),
            ]
        );

        $table = new Family(
            FamilyCode::createFromString('table'),
            new \DateTimeImmutable('2017-05-07T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-08T00:00:00+00:00'),
            AttributeCode::createFromString('name'),
            null,
            [
                AttributeCode::createFromString('name'),
                AttributeCode::createFromString('size'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('size')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR table'),
            ]
        );

        $television = new Family(
            FamilyCode::createFromString('television'),
            new \DateTimeImmutable('2017-05-11T00:00:00+00:00'),
            new \DateTimeImmutable('2017-05-15T00:00:00+00:00'),
            null,
            null,
            [],
            [],
            []
        );

        return [
            'tshirt' => $tshirt,
            'computer' => $computer,
            'table' => $table,
            'television' => $television,
        ];
    }
}
