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
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

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

        $this->persistLocaleInDatabase($enUS);
        $this->persistLocaleInDatabase($frFR);
        $this->persistChannelInDatabase($ecommerce);
        $this->persistChannelInDatabase($tablet);
        $this->persistAttributeInDatabase($attributeAsLabel);
        $this->persistAttributeInDatabase($attributeAsImage);
        $this->persistAttributeInDatabase($attribute1);
        $this->persistAttributeInDatabase($attribute2);
        $this->persistFamilyInDatabase($family);
        $this->persistFamilyInDatabase($familyWithoutAttributeAsLabel);
        $this->persistFamilyInDatabase($familyWithoutAttributeAsImage);
        $this->persistFamilyInDatabase($familyWithoutAttributeAndLabel);
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

        // check labels
        Assert::assertCount(2, $family->labels());

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

        // check labels
        Assert::assertCount(1, $family->labels());

        Assert::assertEquals('US label', $family->labels()[0]->value());
        Assert::assertEquals('en_US', $family->labels()[0]->localeCode()->getValue());
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

        // check labels
        Assert::assertCount(1, $family->labels());

        Assert::assertEquals('US label', $family->labels()[0]->value());
        Assert::assertEquals('en_US', $family->labels()[0]->localeCode()->getValue());
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

    private function persistFamilyInDatabase(Family $family): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $attributeAsLabelId = null;
        if ($family->hasAttributeAsLabel()) {
            $attributeAsLabelId = $this->attributeIdFromCode($family->attributeAsLabelCode());
        }

        $attributeAsImageId = null;
        if ($family->hasAttributeAsImage()) {
            $attributeAsImageId = $this->attributeIdFromCode($family->attributeAsImageCode());
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_family (
                code, 
                created, 
                updated, 
                label_attribute_id, 
                image_attribute_id
            )
            VALUES (
                :code,
                :created,
                :updated,
                :label_attribute_id,
                :image_attribute_id
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->bindValue('label_attribute_id', $attributeAsLabelId, Type::INTEGER);
        $stmt->bindValue('image_attribute_id', $attributeAsImageId, Type::INTEGER);
        $stmt->execute();

        $familyId = $this->familyIdFromCode($family->code());
        foreach ($family->attributeCodes() as $attributeCode) {
            $attributeId = $this->attributeIdFromCode($attributeCode);
            $sql = <<<SQL
                INSERT INTO pim_catalog_family_attribute (
                    family_id,
                    attribute_id
                )
                VALUES (
                    :family_id,
                    :attribute_id
                )
SQL;
            $stmt = $entityManager->getConnection()->prepare($sql);
            $stmt->bindValue('family_id', $familyId, Type::INTEGER);
            $stmt->bindValue('attribute_id', $attributeId, Type::INTEGER);
            $stmt->execute();
        }

        foreach ($family->attributeRequirements() as $attributeRequirement) {
            $sql = <<<SQL
                INSERT INTO pim_catalog_attribute_requirement (
                    family_id,
                    attribute_id,
                    channel_id,
                    required
                )
                VALUES (
                    :family_id,
                    :attribute_id,
                    :channel_id,
                    1
                )
SQL;

            $channelId = $this->channelIdFromCode($attributeRequirement->channelCode());
            foreach ($attributeRequirement->requiredAttributeCodes() as $attributeCode) {
                $stmt = $entityManager->getConnection()->prepare($sql);
                $attributeId = $this->attributeIdFromCode($attributeCode);
                $stmt->bindValue('family_id', $familyId, Type::INTEGER);
                $stmt->bindValue('attribute_id', $attributeId, Type::INTEGER);
                $stmt->bindValue('channel_id', $channelId, Type::INTEGER);
                $stmt->execute();
            }

        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_family_translation (
                foreign_key,
                label,
                locale 
            )
            VALUES (
                :family_id_foreign_key,
                :label,
                :locale
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($family->labels() as $label) {
            $stmt->bindValue('family_id_foreign_key', $this->familyIdFromCode($family->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function persistAttributeInDatabase(Attribute $attribute): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_attribute (
                code, 
                attribute_type, 
                is_localizable,
                is_scopable, 
                sort_order, 
                is_required,
                is_unique,
                entity_type,
                backend_type,
                created,
                updated
            )
            VALUES (
                :code,
                :attribute_type,
                :is_localizable,
                :is_scopable,
                :sort_order,
                :is_required,
                :is_unique,
                :entity_type,
                :backend_type,
                :created,
                :updated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attribute->code()->getValue(), Type::STRING);
        $stmt->bindValue('attribute_type', $attribute->type(), Type::STRING);
        $stmt->bindValue('is_localizable', $attribute->localizable(), Type::BOOLEAN);
        $stmt->bindValue('is_scopable', $attribute->scopable(), Type::BOOLEAN);
        $stmt->bindValue('sort_order', 1, Type::INTEGER);
        $stmt->bindValue('is_required', true, Type::BOOLEAN);
        $stmt->bindValue('is_unique', true, Type::BOOLEAN);
        $stmt->bindValue('entity_type', 'Pim\Component\Catalog\Model\Product', Type::STRING);
        $stmt->bindValue('backend_type', 'text', Type::STRING);
        $stmt->bindValue('created', new \DateTime(), Type::DATETIME);
        $stmt->bindValue('updated', new \DateTime(), Type::DATETIME);
        $stmt->execute();
    }

    private function attributeIdFromCode(AttributeCode $attributeCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_attribute WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attributeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function familyIdFromCode(FamilyCode $familyCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_family WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $familyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function persistChannelInDatabase(Channel $channel): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel (
                code,
                category_id, 
                conversionUnits
            )
            VALUES (
                :code,
                null,
                'a:0:{}'
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channel->code()->getValue(), Type::STRING);
        $stmt->execute();

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_currency (
                channel_id,
                currency_id
            )
            VALUES (
                :channel_id,
                :currency_id
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->currencyCodes() as $currencyCode) {
            $stmt->bindValue('channel_id', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('currency_id', $this->currencyIdFromCode($currencyCode), Type::INTEGER);
            $stmt->execute();
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_locale (
                channel_id,
                locale_id
            )
            VALUES (
                :channel_id,
                :locale_id
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->localeCodes() as $localeCode) {
            $stmt->bindValue('channel_id', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('locale_id', $this->localeIdFromCode($localeCode), Type::INTEGER);
            $stmt->execute();
        }

        $sql = <<<SQL
            INSERT INTO pim_catalog_channel_translation (
                foreign_key,
                label,
                locale 
            )
            VALUES (
                :channel_id_foreign_key,
                :label,
                :locale
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        foreach ($channel->labels() as $label) {
            $stmt->bindValue('channel_id_foreign_key', $this->channelIdFromCode($channel->code()), Type::INTEGER);
            $stmt->bindValue('label', $label->value(), Type::INTEGER);
            $stmt->bindValue('locale', $label->localeCode()->getValue(), Type::INTEGER);
            $stmt->execute();
        }
    }

    private function persistLocaleInDatabase(Locale $locale): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_locale(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $locale->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $locale->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }

    private function persistCurrencyInDatabase(Currency $currency): void
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            INSERT INTO pim_catalog_currency(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currency->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $currency->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }

    private function localeIdFromCode(LocaleCode $localeCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_locale WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $localeCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function currencyIdFromCode(CurrencyCode $currencyCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_currency WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currencyCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }

    private function channelIdFromCode(ChannelCode $channelCode): string
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
            SELECT id FROM pim_catalog_channel WHERE code = :code
SQL;
        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $channelCode->getValue(), Type::STRING);
        $stmt->execute();
        $row = $stmt->fetch();

        return $row['id'];
    }
}
