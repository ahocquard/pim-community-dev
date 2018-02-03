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
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryProductRepository;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LocaleFixtures
{
    public function getFixtures()
    {
        $frFR= new Locale(
            LocaleCode::createFromString('fr_FR'),
           true
        );

        $enUS = new Locale(
            LocaleCode::createFromString('en_US'),
            true
        );

        $deDE = new Locale(
            LocaleCode::createFromString('de_DE'),
            true
        );

        return [
            'fr_FR' => $frFR,
            'en_US' => $enUS,
            'de_DE' => $deDE,
        ];
    }
}
