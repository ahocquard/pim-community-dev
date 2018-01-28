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
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['category_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'category_code',
                'parent_code' => null,
                'translations' => '[{"locale":"fr_FR", "label":"FR label"},{"locale":"en_US", "label":"US label"}]'
            ]
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
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['category_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);
        $stmt->fetchAll()->willReturn([
            [
                'code' => 'category_code',
                'parent_code' => 'root_category',
                'translations' => '[{"locale":null, "label":null}]'
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
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['category_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);
        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCode(CategoryCode::createFromString('category_code'))
            ->shouldReturn(null);
    }

    function it_gets_categories_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['category_code_1', 'category_code_2', 'foo']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'category_code_1',
                'parent_code' => null,
                'translations' => '[{"locale":"fr_FR", "label":"FR label"},{"locale":"en_US", "label":"US label"}]'
            ],
            [
                'code' => 'category_code_2',
                'parent_code' => 'root_category',
                'translations' => '[{"locale":null, "label":null}]'
            ]
        ]);

        $this
            ->withCodes([
                CategoryCode::createFromString('category_code_1'),
                CategoryCode::createFromString('category_code_2'),
                CategoryCode::createFromString('foo'),
            ])
            ->shouldBeLike([
                new Category(
                    CategoryCode::createFromString('category_code_1'),
                    null,
                    [
                        CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label'),
                        CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label')
                    ]
                ),
                new Category(
                    CategoryCode::createFromString('category_code_2'),
                    CategoryCode::createFromString('root_category'),
                    []
                )
            ]);
    }

    function it_returns_an_empty_array_when_categories_are_not_found($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['foo']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCodes([
                CategoryCode::createFromString('foo'),
            ])
            ->shouldBeLike([]);
    }
}
