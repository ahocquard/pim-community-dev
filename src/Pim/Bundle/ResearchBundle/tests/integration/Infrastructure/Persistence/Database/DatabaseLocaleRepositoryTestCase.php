<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\LocaleLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseLocaleRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))();

        $locale1 = new Locale(
            LocaleCode::createFromString('locale_code_1'),
            false
        );

        $locale2 = new Locale(
            LocaleCode::createFromString('locale_code_2'),
            true
        );

        $localeLoader = new LocaleLoader($entityManager);
        $localeLoader->load($locale1);
        $localeLoader->load($locale2);
    }

    public function test_with_code_on_persisted_locale()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.locale.locale_repository');

        $locale = $repository->withCode(LocaleCode::createFromString('locale_code_1'));
        Assert::assertNotNull($locale);
        Assert::assertEquals('locale_code_1', $locale->code()->getValue());
        Assert::assertFalse($locale->enabled());
    }

    public function test_with_code_on_non_existing_locale()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.locale.locale_repository');

        $locale = $repository->withCode(LocaleCode::createFromString('foo'));
        Assert::assertNull($locale);
    }

    public function test_with_codes_on_persisted_locales()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.locale.locale_repository');

        $locales = $repository->withCodes([
            LocaleCode::createFromString('locale_code_1'),
            LocaleCode::createFromString('locale_code_2'),
        ]);
        Assert::assertNotNull($locales);

        $locale1 = $locales[0];
        Assert::assertEquals('locale_code_1', $locale1->code()->getValue());
        Assert::assertFalse($locale1->enabled());

        $locale2 = $locales[1];
        Assert::assertEquals('locale_code_2', $locale2->code()->getValue());
        Assert::assertTrue($locale2->enabled());
    }

    public function test_with_codes_on_non_existing_locales()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.locale.locale_repository');

        $locales = $repository->withCodes([
            LocaleCode::createFromString('foo'),
        ]);
        Assert::assertEquals([], $locales);
    }
}
