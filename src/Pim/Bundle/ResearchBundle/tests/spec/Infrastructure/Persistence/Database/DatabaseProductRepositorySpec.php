<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Platforms\MySqlPlatform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseProductRepository;
use Prophecy\Argument;

class DatabaseProductRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseProductRepository::class);
    }

    function it_gets_a_product_with_identifier($connection, Statement $stmt, MySQL57Platform $platform)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('identifier', 'product_identifier')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn([
            'created' => '2017-05-07 00:00:00',
            'updated' => '2017-05-08 00:00:00',
            'is_enabled' => '1',
            'family_code' => 'family_code'
        ]);

        $this
            ->withIdentifier(ProductIdentifier::createFromString('product_identifier'))
            ->shouldBeLike(
                new Product(
                    ProductIdentifier::createFromString('product_identifier'),
                    new \DateTime('2017-05-07 00:00:00'),
                    new \DateTime('2017-05-08 00:00:00'),
                    true,
                    FamilyCode::createFromString('family_code')
                )
            );
    }

    function it_returns_null_when_family_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('identifier', 'product_identifier')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetch()->willReturn(false);

        $this
            ->withIdentifier(ProductIdentifier::createFromString('product_identifier'))
            ->shouldReturn(null);
    }
}
