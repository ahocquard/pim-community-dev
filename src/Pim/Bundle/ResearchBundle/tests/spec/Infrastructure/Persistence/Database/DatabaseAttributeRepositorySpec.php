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

    function it_gets_attributes_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['attribute_code_1', 'attribute_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'attribute_code_1',
                'attribute_type' => 'pim_catalog_text',
                'is_localizable' => '1',
                'is_scopable' => '0'
            ],
            [
                'code' => 'attribute_code_2',
                'attribute_type' => 'pim_catalog_boolean',
                'is_localizable' => '0',
                'is_scopable' => '1'
            ]
        ]);

        $this
            ->withCodes([
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2')
            ])
            ->shouldBeLike([
                new Attribute(
                    AttributeCode::createFromString('attribute_code_1'),
                    'pim_catalog_text',
                    true,
                    false
                ),
                new Attribute(
                    AttributeCode::createFromString('attribute_code_2'),
                    'pim_catalog_boolean',
                    false,
                    true
                )
            ]);
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
