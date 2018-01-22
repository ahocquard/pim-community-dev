<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database\CurrencyLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class DatabaseCurrencyRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');
        (new ResetDatabase($entityManager))();

        $currency1 = new Currency(
            CurrencyCode::createFromString('EUR'),
            false
        );

        $currency2 = new Currency(
            CurrencyCode::createFromString('USD'),
            true
        );

        $currencyLoader = new CurrencyLoader($entityManager);
        $currencyLoader->load($currency1);
        $currencyLoader->load($currency2);
    }

    public function test_with_code_on_persisted_currency()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.currency.currency_repository');

        $currency = $repository->withCode(CurrencyCode::createFromString('EUR'));
        Assert::assertNotNull($currency);
        Assert::assertEquals('EUR', $currency->code()->getValue());
        Assert::assertFalse($currency->enabled());
    }

    public function test_with_code_on_non_existing_currency()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.currency.currency_repository');

        $currency = $repository->withCode(CurrencyCode::createFromString('foo'));
        Assert::assertNull($currency);
    }

    public function test_with_codes_on_persisted_currencies()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.currency.currency_repository');

        $currencys = $repository->withCodes([
            CurrencyCode::createFromString('EUR'),
            CurrencyCode::createFromString('USD'),
        ]);
        Assert::assertNotNull($currencys);

        $currency1 = $currencys[0];
        Assert::assertEquals('EUR', $currency1->code()->getValue());
        Assert::assertFalse($currency1->enabled());

        $currency2 = $currencys[1];
        Assert::assertEquals('USD', $currency2->code()->getValue());
        Assert::assertTrue($currency2->enabled());
    }

    public function test_with_codes_on_non_existing_currencies()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.domain_model.currency.currency_repository');

        $currencies = $repository->withCodes([
            CurrencyCode::createFromString('foo'),
        ]);
        Assert::assertEquals([], $currencies);
    }
}
