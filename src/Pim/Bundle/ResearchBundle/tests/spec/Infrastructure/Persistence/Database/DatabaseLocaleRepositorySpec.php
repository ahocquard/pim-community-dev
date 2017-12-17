<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseLocaleRepository;
use Prophecy\Argument;

class DatabaseLocaleRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseLocaleRepository::class);
    }

    function it_gets_a_locale_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'locale_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn([
            'is_activated' => '1',
        ]);

        $this
            ->withCode(LocaleCode::createFromString('locale_code'))
            ->shouldBeLike(
                new Locale(
                    LocaleCode::createFromString('locale_code'),
                    true
                )
            );
    }

    function it_gets_locales_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['locale_code_1', 'locale_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'locale_code_1',
                'is_activated' => '1',
            ],
            [
                'code' => 'locale_code_2',
                'is_activated' => '0',
            ]
        ]);

        $this
            ->withCodes([
                LocaleCode::createFromString('locale_code_1'),
                LocaleCode::createFromString('locale_code_2')
            ])
            ->shouldBeLike([
                new Locale(
                    LocaleCode::createFromString('locale_code_1'),
                    true
                ),
                new Locale(
                    LocaleCode::createFromString('locale_code_2'),
                    false
                ),
            ]);
    }

    function it_returns_null_when_locale_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'locale_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn(false);

        $this
            ->withCode(LocaleCode::createFromString('locale_code'))
            ->shouldReturn(null);
    }
}
