<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryCategoryRepository;

class InMemoryCategoryRepositorySpec extends ObjectBehavior
{
    function let(Category $category)
    {
        $category->code()->willReturn(CategoryCode::createFromString('category_code_1'));
        $this->add($category);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryCategoryRepository::class);
    }

    function it_gets_a_category_with_code($category)
    {
        $this->withCode(CategoryCode::createFromString('category_code_1'))->shouldReturn($category);
    }

    function it_returns_null_when_category_is_not_found()
    {
        $this->withCode(CategoryCode::createFromString('category_code_2'))->shouldReturn(null);
    }
}
