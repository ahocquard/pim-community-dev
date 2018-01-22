<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\Channel;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
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
        (new ResetDatabase($entityManager))();

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
        $familyLoader = new FamilyLoader($entityManager);

        $localeLoader->load($enUS);
        $localeLoader->load($frFR);
        $channelLoader->load($ecommerce);
        $channelLoader->load($tablet);
        $attributeLoader->load($attributeAsLabel);
        $attributeLoader->load($attributeAsImage);
        $attributeLoader->load($attribute1);
        $attributeLoader->load($attribute2);
        $familyLoader->load($family);
        $familyLoader->load($familyWithoutAttributeAsLabel);
        $familyLoader->load($familyWithoutAttributeAsImage);
        $familyLoader->load($familyWithoutAttributeAndLabel);
    }

    public function test_with_code_on_persisted_family_with_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('complete_family_code'));
        Assert::assertNotNull($family);
        Assert::assertEquals('complete_family_code', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(4, $family->attributeCodes());

        Assert::assertTrue($family->hasAttributeAsLabel());
        Assert::assertTrue($family->hasAttributeAsImage());
        Assert::assertEquals('attribute_as_label_code', $family->attributeAsLabelCode()->getValue());
        Assert::assertEquals('attribute_as_image_code', $family->attributeAsImageCode()->getValue());

        // check attributes
        $attributes = [
            $family->attributeCodes()[0]->getValue(),
            $family->attributeCodes()[1]->getValue(),
            $family->attributeCodes()[2]->getValue(),
            $family->attributeCodes()[3]->getValue(),
        ];

        Assert::assertTrue(in_array('attribute_as_label_code', $attributes));
        Assert::assertTrue(in_array('attribute_as_image_code', $attributes));
        Assert::assertTrue(in_array('attribute_code_2', $attributes));
        Assert::assertTrue(in_array('attribute_code_1', $attributes));

        // check attribute requirements
        Assert::assertCount(2, $family->attributeRequirements());

        Assert::assertEquals('ecommerce', $family->attributeRequirements()[0]->channelCode()->getValue());
        Assert::assertCount(2, $family->attributeRequirements()[0]->requiredAttributeCodes());
        Assert::assertEquals('attribute_code_1', $family->attributeRequirements()[0]->requiredAttributeCodes()[0]->getValue());
        Assert::assertEquals('attribute_code_2', $family->attributeRequirements()[0]->requiredAttributeCodes()[1]->getValue());

        Assert::assertEquals('tablet', $family->attributeRequirements()[1]->channelCode()->getValue());
        Assert::assertCount(1, $family->attributeRequirements()[1]->requiredAttributeCodes());
        Assert::assertEquals('attribute_code_1', $family->attributeRequirements()[1]->requiredAttributeCodes()[0]->getValue());

        Assert::assertEquals('US label', $family->labels()[0]->value());
        Assert::assertEquals('FR label', $family->labels()[1]->value());
        Assert::assertEquals('en_US', $family->labels()[0]->localeCode()->getValue());
        Assert::assertEquals('fr_FR', $family->labels()[1]->localeCode()->getValue());
    }

    public function test_with_code_on_persisted_family_without_attribute_as_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_label'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code_without_label', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(2, $family->attributeCodes());

        Assert::assertFalse($family->hasAttributeAsLabel());
        Assert::assertTrue($family->hasAttributeAsImage());
        Assert::assertNull($family->attributeAsLabelCode());
        Assert::assertEquals('attribute_as_image_code', $family->attributeAsImageCode()->getValue());

        // check attributes
        $attributes = [
            $family->attributeCodes()[0]->getValue(),
            $family->attributeCodes()[1]->getValue(),
        ];

        Assert::assertTrue(in_array('attribute_as_image_code', $attributes));
        Assert::assertTrue(in_array('attribute_code_1', $attributes));

        // check attribute requirements
        Assert::assertCount(1, $family->attributeRequirements());

        Assert::assertEquals('ecommerce', $family->attributeRequirements()[0]->channelCode()->getValue());
        Assert::assertCount(1, $family->attributeRequirements()[0]->requiredAttributeCodes());
        Assert::assertEquals('attribute_code_1', $family->attributeRequirements()[0]->requiredAttributeCodes()[0]->getValue());
    }

    public function test_with_code_on_persisted_family_without_attribute_as_image()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_image'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code_without_image', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(2, $family->attributeCodes());

        Assert::assertTrue($family->hasAttributeAsLabel());
        Assert::assertFalse($family->hasAttributeAsImage());
        Assert::assertEquals('attribute_as_label_code', $family->attributeAsLabelCode()->getValue());
        Assert::assertNull($family->attributeAsImageCode());

        // check attributes
        $attributes = [
            $family->attributeCodes()[0]->getValue(),
            $family->attributeCodes()[1]->getValue(),
        ];

        Assert::assertTrue(in_array('attribute_as_label_code', $attributes));
        Assert::assertTrue(in_array('attribute_code_1', $attributes));

        // check attribute requirements
        Assert::assertCount(1, $family->attributeRequirements());

        Assert::assertEquals('ecommerce', $family->attributeRequirements()[0]->channelCode()->getValue());
        Assert::assertCount(1, $family->attributeRequirements()[0]->requiredAttributeCodes());
        Assert::assertEquals('attribute_code_1', $family->attributeRequirements()[0]->requiredAttributeCodes()[0]->getValue());
    }

    public function test_with_code_on_persisted_family_without_attribute_and_label()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code_without_attribute_and_label'));
        Assert::assertNotNull($family);
        Assert::assertEquals('family_code_without_attribute_and_label', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+00:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+00:00'), $family->updated());
        Assert::assertCount(0, $family->attributeCodes());
        Assert::assertCount(0, $family->attributeRequirements());
        Assert::assertCount(0, $family->labels());
        Assert::assertFalse($family->hasAttributeAsLabel());
        Assert::assertFalse($family->hasAttributeAsImage());
        Assert::assertNull($family->attributeAsLabelCode());
        Assert::assertNull($family->attributeAsImageCode());
    }

    public function test_with_code_on_non_existing_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.family.family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('foo'));
        Assert::assertNull($family);
    }
}
