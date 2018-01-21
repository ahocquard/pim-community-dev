<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseCategoryRepository;
use Prophecy\Argument;

class DatabaseCategoryRepositorySpec extends ObjectBehavior
{
    function let(EntityManagerInterface $em, Connection $connection)
    {
        $em->getConnection()->willreturn($connection);
        $this->beConstructedWith($em);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(DatabaseCategoryRepository::class);
    }

    function it_gets_a_root_category_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'category_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetchAll()->willReturn([
            [
                'parent_code' => null,
                'locale_of_label' => 'fr_FR',
                'label' => 'FR label',
            ],
            [
                'parent_code' => null,
                'locale_of_label' => 'en_US',
                'label' => 'US label',
            ],
        ]);

        $this
            ->withCode(CategoryCode::createFromString('category_code'))
            ->shouldBeLike(
                 new Category(
                    CategoryCode::createFromString('category_code'),
                    null,
                    [
                        CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label'),
                        CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label')
                    ]
                )
            );
    }

    function it_gets_a_child_category_with_code($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'category_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetchAll()->willReturn([
            [
                'parent_code' => 'root_category',
                'locale_of_label' => null,
                'label' => null,
            ]
        ]);

        $this
            ->withCode(CategoryCode::createFromString('category_code'))
            ->shouldBeLike(
                new Category(
                    CategoryCode::createFromString('category_code'),
                    CategoryCode::createFromString('root_category'),
                    []
                )
            );
    }

    function it_returns_null_when_category_is_not_found($connection, Statement $stmt)
    {
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'category_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCode(CategoryCode::createFromString('category_code'))
            ->shouldReturn(null);
    }
}
