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
        $stmt->bindValue('code', 'family_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetchAll()->willReturn([
            [
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_code' => 'attribute_code',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'channel_code' => 'ecommerce',
                'attribute_requirements' => 'attribute_code_1|attribute_code_2',
                'attributes' => 'attribute_as_image_code|attribute_as_label_code|attribute_code_1|attribute_code_2',
                'label' => 'US label',
                'locale_of_label' => 'en_US'
            ],
            [
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_code' => 'attribute_code',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'channel_code' => 'tablet',
                'attribute_requirements' => 'attribute_code_2',
                'attributes' => 'attribute_as_image_code|attribute_as_label_code|attribute_code_1|attribute_code_2',
                'label' => 'US label',
                'locale_of_label' => 'en_US'
            ],
            [
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_code' => 'attribute_code',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'channel_code' => 'ecommerce',
                'attribute_requirements' => 'attribute_code_1|attribute_code_2',
                'attributes' => 'attribute_as_image_code|attribute_as_label_code|attribute_code_1|attribute_code_2',
                'label' => 'FR label',
                'locale_of_label' => 'fr_FR'
            ],
            [
                'created' => '2017-05-07 00:00:00',
                'updated' => '2017-05-08 00:00:00',
                'attribute_code' => 'attribute_code',
                'attribute_as_image_code' => 'attribute_as_image_code',
                'attribute_as_label_code' => 'attribute_as_label_code',
                'channel_code' => 'tablet',
                'attribute_requirements' => 'attribute_code_2',
                'attributes' => 'attribute_as_image_code|attribute_as_label_code|attribute_code_1|attribute_code_2',
                'label' => 'FR label',
                'locale_of_label' => 'fr_FR'
            ]
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
        $connection->prepare(Argument::cetera())->willReturn($stmt);
        $stmt->bindValue('code', 'family_code')->shouldBeCalled();
        $stmt->execute()->shouldBeCalled();
        $stmt->fetchAll()->willReturn([]);

        $this
            ->withCode(FamilyCode::createFromString('family_code'))
            ->shouldReturn(null);
    }
}
