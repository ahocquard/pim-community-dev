<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
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
        (new ResetDatabase(static::$kernel->getContainer()->get('doctrine.orm.entity_manager')))();

        $locale1 = new Locale(
            LocaleCode::createFromString('locale_code_1'),
            false
        );

        $locale2 = new Locale(
            LocaleCode::createFromString('locale_code_2'),
            true
        );

        $this->persistLocaleInDatabase($locale1);
        $this->persistLocaleInDatabase($locale2);
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
}
