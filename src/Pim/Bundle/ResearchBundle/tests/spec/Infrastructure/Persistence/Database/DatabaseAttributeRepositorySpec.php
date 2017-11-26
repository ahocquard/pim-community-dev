<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseAttributeRepository;
use Prophecy\Argument;

class DatabaseAttributeRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseAttributeRepository::class);
    }

    function it_gets_an_attribute_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'attribute_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn([
            'attribute_type' => 'pim_catalog_text',
            'is_localizable' => '1',
            'is_scopable' => '0'
        ]);

        $this
            ->withCode(AttributeCode::createFromString('attribute_code'))
            ->shouldBeLike(
                new Attribute(
                    AttributeCode::createFromString('attribute_code'),
                    'pim_catalog_text',
                    true,
                    false
                )
            );
    }

    function it_returns_null_when_attribute_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'attribute_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn(false);

        $this
            ->withCode(AttributeCode::createFromString('attribute_code'))
            ->shouldReturn(null);
    }
}
