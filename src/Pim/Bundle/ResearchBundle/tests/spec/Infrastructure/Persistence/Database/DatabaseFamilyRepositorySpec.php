<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseFamilyRepository;
use Prophecy\Argument;

class DatabaseFamilyRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseFamilyRepository::class);
    }

    function it_gets_a_family_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'family_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn([
            'created' => '2017-05-07 00:00:00',
            'updated' => '2017-05-08 00:00:00'
        ]);

        $this
            ->withCode(FamilyCode::createFromString('family_code'))
            ->shouldBeLike(
                new Family(
                    FamilyCode::createFromString('family_code'),
                    new \DateTime('2017-05-07 00:00:00'),
                    new \DateTime('2017-05-08 00:00:00')
                )
            );
    }

    function it_returns_null_when_family_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'family_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn(false);

        $this
            ->withCode(FamilyCode::createFromString('family_code'))
            ->shouldReturn(null);
    }
}
