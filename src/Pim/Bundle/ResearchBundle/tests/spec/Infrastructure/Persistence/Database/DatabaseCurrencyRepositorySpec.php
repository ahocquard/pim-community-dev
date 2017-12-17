<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseCurrencyRepository;
use Prophecy\Argument;

class DatabaseCurrencyRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseCurrencyRepository::class);
    }

    function it_gets_a_currency_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'currency_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn([
            'is_activated' => '1',
        ]);

        $this
            ->withCode(CurrencyCode::createFromString('currency_code'))
            ->shouldBeLike(
                new Currency(
                    CurrencyCode::createFromString('currency_code'),
                    true
                )
            );
    }

    function it_gets_currencies_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['currency_code_1', 'currency_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'currency_code_1',
                'is_activated' => '1',
            ],
            [
                'code' => 'currency_code_2',
                'is_activated' => '0',
            ]
        ]);

        $this
            ->withCodes([
                CurrencyCode::createFromString('currency_code_1'),
                CurrencyCode::createFromString('currency_code_2')
            ])
            ->shouldBeLike([
                new Currency(
                    CurrencyCode::createFromString('currency_code_1'),
                    true
                ),
                new Currency(
                    CurrencyCode::createFromString('currency_code_2'),
                    false
                ),
            ]);
    }

    function it_returns_null_when_currency_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'currency_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn(false);

        $this
            ->withCode(CurrencyCode::createFromString('currency_code'))
            ->shouldReturn(null);
    }
}
