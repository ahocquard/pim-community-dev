<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\AttributeLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\ChannelLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\FamilyLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\LocaleLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseFamilyRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))->byDeletingRows();


        $attributeAsLabel = new Attribute(
            AttributeCode::createFromString('attribute_as_label_code'),
            'pim_catalog_text',
            false,
            true
        );

        $attributeAsImage = new Attribute(
            AttributeCode::createFromString('attribute_as_image_code'),
            'pim_catalog_text',
            false,
            true
        );

        $attribute1 = new Attribute(
            AttributeCode::createFromString('attribute_code_1'),
            'pim_catalog_text',
            false,
            true
        );

        $attribute2 = new Attribute(
            AttributeCode::createFromString('attribute_code_2'),
            'pim_catalog_text',
            false,
            true
        );

        $ecommerce = new Channel(
            ChannelCode::createFromString('ecommerce'),
            [LocaleCode::createFromString('en_US')],
            [],
            []
        );

        $tablet = new Channel(
            ChannelCode::createFromString('tablet'),
            [LocaleCode::createFromString('fr_FR')],
            [],
            []
        );

        $enUS = new Locale(LocaleCode::createFromString('en_US'), false);
        $frFR = new Locale(LocaleCode::createFromString('fr_FR'), false);

        $localeLoader = new LocaleLoader($entityManager);
        $channelLoader = new ChannelLoader($entityManager);
        $attributeLoader = new AttributeLoader($entityManager);

        $localeLoader->load($enUS);
        $localeLoader->load($frFR);
        $channelLoader->load($ecommerce);
        $channelLoader->load($tablet);
        $attributeLoader->load($attributeAsLabel);
        $attributeLoader->load($attributeAsImage);
        $attributeLoader->load($attribute1);
        $attributeLoader->load($attribute2);

        $familyLoader = new FamilyLoader($entityManager);
        $families = $this->familyFixtures();
        foreach ($families as $family) {
            $familyLoader->load($family);
        }
    }

    public function test_with_code_on_persisted_family_with_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('complete_family_code'));
        Assert::assertEquals($this->familyFixtures()['complete_family'], $family, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_family_without_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_label'));
        Assert::assertEquals($this->familyFixtures()['family_without_attribute_as_label'], $family, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_family_without_attribute_as_image()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_image'));
        Assert::assertEquals($this->familyFixtures()['family_without_attribute_as_image'], $family, '', 0.0, 10, true);
    }

    public function test_with_code_on_persisted_family_without_attribute_and_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_attribute_and_label'));
        Assert::assertEquals($this->familyFixtures()['family_without_attribute_and_label'], $family, '', 0.0, 10, true);
    }

    public function test_with_code_on_non_existing_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('foo'));
        Assert::assertNull($family);
    }

    public function test_with_codes_on_persisted_families()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $families = $repository->withCodes([
            FamilyCode::createFromString('complete_family_code'),
            FamilyCode::createFromString('family_code_without_label'),
            FamilyCode::createFromString('family_code_without_image'),
            FamilyCode::createFromString('family_code_without_attribute_and_label'),
            FamilyCode::createFromString('foo'),
        ]);

        $expectedFamilies= $this->familyFixtures();

        Assert::assertEquals(array_values($expectedFamilies), $families, '', 0.0, 10, true);
    }

    public function test_with_codes_on_non_existing_families()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $families = $repository->withCodes([
            FamilyCode::createFromString('foo'),
            FamilyCode::createFromString('baz'),
        ]);

        Assert::assertNotNull($families);
        Assert::assertEquals([], $families);
    }

    private function familyFixtures(): array
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
