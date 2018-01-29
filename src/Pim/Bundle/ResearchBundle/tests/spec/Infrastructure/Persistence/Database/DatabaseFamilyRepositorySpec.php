<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Platforms\MySQL57Platform;
use Doctrine\DBAL\Statement;
use Doctrine\ORM\EntityManagerInterface;
use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
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
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['family_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'family_code',
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'attribute_requirements' => '[{"channel":"ecommerce", "attribute_requirement_codes": ["attribute_code_1","attribute_code_2"]}, {"channel":"tablet", "attribute_requirement_codes": ["attribute_code_2"]}]',
                'attribute_codes' => '["attribute_as_image_code","attribute_as_label_code","attribute_code_1","attribute_code_2"]',
                'translations' => '[{"locale":"en_US", "label":"US label"},{"locale":"fr_FR", "label":"FR label"}]'
            ],
        ]);

        $this
            ->withCode(FamilyCode::createFromString('family_code'))
            ->shouldBeLike(
                new Family(
                    FamilyCode::createFromString('family_code'),
                    new \DateTime('2017-05-07 00:00:00'),
                    new \DateTime('2017-05-08 00:00:00'),
                    AttributeCode::createFromString('attribute_as_label_code'),
                    AttributeCode::createFromString('attribute_as_image_code'),
                    [
                        AttributeCode::createFromString('attribute_as_image_code'),
                        AttributeCode::createFromString('attribute_as_label_code'),
                        AttributeCode::createFromString('attribute_code_1'),
                        AttributeCode::createFromString('attribute_code_2'),
                    ],
                    [
                        AttributeRequirement::createFromChannelCode(ChannelCode::createFromString('ecommerce'), [
                            AttributeCode::createFromString('attribute_code_1'),
                            AttributeCode::createFromString('attribute_code_2'),
                        ]),
                        AttributeRequirement::createFromChannelCode(ChannelCode::createFromString('tablet'), [
                            AttributeCode::createFromString('attribute_code_2'),
                        ]),
                    ],
                    [
                        FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
                        FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label'),
                    ]
                )
            );
    }

    function it_returns_null_when_family_is_not_found($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['family_code']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);
        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCode(FamilyCode::createFromString('family_code'))
            ->shouldReturn(null);
    }

    function it_gets_families_with_codes($connection, Statement $stmt)
    {
        $connection->getDatabasePlatform()->willReturn(new MySQL57Platform());
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $connection->executeQuery(
            Argument::type('string'),
            ['codes' => ['family_code_1', 'family_code_2']],
            ['codes' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        )->willReturn($stmt);

        $stmt->fetchAll()->willReturn([
            [
                'code' => 'family_code_1',
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'attribute_requirements' => '[{"channel":"ecommerce", "attribute_requirement_codes": ["attribute_code_1","attribute_code_2"]}, {"channel":"tablet", "attribute_requirement_codes": ["attribute_code_2"]}]',
                'attribute_codes' => '["attribute_as_image_code","attribute_as_label_code","attribute_code_1","attribute_code_2"]',
                'translations' => '[{"locale":"en_US", "label":"US label"},{"locale":"fr_FR", "label":"FR label"}]'
            ],
            [
                'code' => 'family_code_2',
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_as_image_code' => null,
                'attribute_as_label_code' => null,
                'attribute_requirements' => null,
                'attribute_codes' => null,
                'translations' => '[{"locale":null, "label":null}]'
            ],
        ]);

        $this
            ->withCodes([
                FamilyCode::createFromString('family_code_1'),
                FamilyCode::createFromString('family_code_2')
            ])
            ->shouldBeLike([
                new Family(
                    FamilyCode::createFromString('family_code_1'),
                    new \DateTime('2017-05-07 00:00:00'),
                    new \DateTime('2017-05-08 00:00:00'),
                    AttributeCode::createFromString('attribute_as_label_code'),
                    AttributeCode::createFromString('attribute_as_image_code'),
                    [
                        AttributeCode::createFromString('attribute_as_image_code'),
                        AttributeCode::createFromString('attribute_as_label_code'),
                        AttributeCode::createFromString('attribute_code_1'),
                        AttributeCode::createFromString('attribute_code_2'),
                    ],
                    [
                        AttributeRequirement::createFromChannelCode(ChannelCode::createFromString('ecommerce'), [
                            AttributeCode::createFromString('attribute_code_1'),
                            AttributeCode::createFromString('attribute_code_2'),
                        ]),
                        AttributeRequirement::createFromChannelCode(ChannelCode::createFromString('tablet'), [
                            AttributeCode::createFromString('attribute_code_2'),
                        ]),
                    ],
                    [
                        FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'US label'),
                        FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('fr_FR'), 'FR label'),
                    ]
                ),
                new Family(
                    FamilyCode::createFromString('family_code_2'),
                    new \DateTime('2017-05-07 00:00:00'),
                    new \DateTime('2017-05-08 00:00:00'),
                    null,
                    null,
                    [],
                    [],
                    []
                )
            ]);
    }
}
