<?php

namespace spec\Pim\Bundle\ResearchBundle\DomainModel\Category;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class CategorySpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(
            CategoryCode::createFromString('code'),
            CategoryCode::createFromString('parent_code'),
            [CategoryLabel::createFromLocaleCode(LocaleCode::createFromString('en_US'), 'foo')]
        );
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(Category::class);
    }

    function it_returns_code()
    {
        $this->code()->shouldBeAnInstanceOf(CategoryCode::class);
        $this->code()->getValue()->shouldReturn('code');
    }

    function it_returns_parent_code()
    {
        $this->parentCode()->shouldBeAnInstanceOf(CategoryCode::class);
        $this->parentCode()->getValue()->shouldReturn('parent_code');
    }

    function it_returns_wether_it_is_root()
    {
        $this->isRoot()->shouldReturn(false);
    }

    function it_returns_labels()
    {
        $this->labels()->shouldBeLike([new CategoryLabel(LocaleCode::createFromString('en_US'), 'foo')]);
    }
}
