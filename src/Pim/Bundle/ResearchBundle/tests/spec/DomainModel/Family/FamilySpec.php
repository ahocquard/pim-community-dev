<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Family;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class FamilySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            FamilyCode::createFromString('code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            AttributeCode::createFromString('attribute_code_as_label'),
            AttributeCode::createFromString('attribute_code_as_image'),
            [
                AttributeCode::createFromString('attribute_code_as_label'),
                AttributeCode::createFromString('attribute_code_as_image'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_as_label')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')
            ]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Family::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(FamilyCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_created_date()
    {
        $this->created()->shouldBeLike(new \DateTime('2017-05-07T00:00:00+01:00'));
    }

    function it_returns_updated_date()
    {
        $this->updated()->shouldBeLike(new \DateTime('2017-05-08T00:00:00+01:00'));
    }

    function it_returns_attribute_codes()
    {
        $this->attributeCodes()->shouldBeLike([
            AttributeCode::createFromString('attribute_code_as_label'),
            AttributeCode::createFromString('attribute_code_as_image'),
            AttributeCode::createFromString('attribute_code_1'),
            AttributeCode::createFromString('attribute_code_2'),
        ]);
    }

    function it_returns_attribute_requirements()
    {
        $this->attributeRequirements()->shouldBeLike([
            AttributeRequirement::createFromChannelCode(
                ChannelCode::createFromString('ecommerce'),
                [
                    AttributeCode::createFromString('attribute_code_as_label')
                ]
            ),
        ]);
    }

    function it_returns_attribute_as_label_code()
    {
        $this->attributeAsLabelCode()->shouldBeAnInstanceOf(AttributeCode::class);
        $this->attributeAsLabelCode()->getValue()->shouldReturn('attribute_code_as_label');
    }

    function it_has_attribute_as_label()
    {
        $this->hasAttributeAsLabel()->shouldReturn(true);
    }

    function it_returns_attribute_as_image_code()
    {
        $this->attributeAsImageCode()->shouldBeAnInstanceOf(AttributeCode::class);
        $this->attributeAsImageCode()->getValue()->shouldReturn('attribute_code_as_image');
    }

    function it_has_attribute_as_image()
    {
        $this->hasAttributeAsLabel()->shouldReturn(true);
    }

    function it_does_not_have_attribute_has_label()
    {
        $this->beConstructedWith(
            FamilyCode::createFromString('code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            null,
            AttributeCode::createFromString('attribute_code_as_image'),
            [
                AttributeCode::createFromString('attribute_code_as_label'),
                AttributeCode::createFromString('attribute_code_as_image'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_as_label')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')
            ]
        );

        $this->hasAttributeAsLabel()->shouldReturn(false);
    }

    function it_does_not_have_attribute_has_image()
    {
        $this->beConstructedWith(
            FamilyCode::createFromString('code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00'),
            AttributeCode::createFromString('attribute_code_as_label'),
            null,
            [
                AttributeCode::createFromString('attribute_code_as_label'),
                AttributeCode::createFromString('attribute_code_as_image'),
                AttributeCode::createFromString('attribute_code_1'),
                AttributeCode::createFromString('attribute_code_2'),
            ],
            [
                AttributeRequirement::createFromChannelCode(
                    ChannelCode::createFromString('ecommerce'),
                    [
                        AttributeCode::createFromString('attribute_code_as_label')
                    ]
                ),
            ],
            [
                FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')
            ]
        );

        $this->hasAttributeAsImage()->shouldReturn(false);
    }

    function it_returns_labels()
    {
        $this->labels()->shouldBeLike([
            FamilyLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')
        ]);
    }
}
