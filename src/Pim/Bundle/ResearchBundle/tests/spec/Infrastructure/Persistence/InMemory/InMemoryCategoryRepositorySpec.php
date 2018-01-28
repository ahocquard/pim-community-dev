<?php

namespace spec\Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use PhpSpec\ObjectBehavior;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryCategoryRepository;

class InMemoryCategoryRepositorySpec extends ObjectBehavior
{
    function let(Category $category1, Category $category2)
    {
        $category1->code()->willReturn(CategoryCode::createFromString('category_code_1'));
        $category2->code()->willReturn(CategoryCode::createFromString('category_code_2'));
        $this->add($category1);
        $this->add($category2);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(InMemoryCategoryRepository::class);
    }

    function it_gets_a_category_with_code($category1)
    {
        $this->withCode(CategoryCode::createFromString('category_code_1'))->shouldReturn($category1);
    }

    function it_returns_null_when_category_is_not_found()
    {
        $this->withCode(CategoryCode::createFromString('foo'))->shouldReturn(null);
    }

    function it_gets_categories_with_codes($category1, $category2)
    {
        $this->withCodes([
            CategoryCode::createFromString('category_code_1'),
            CategoryCode::createFromString('category_code_2')
        ])->shouldReturn([$category1, $category2]);
    }

    function it_returns_empty_array_when_no_category_found()
    {
        $this->withCodes([
            CategoryCode::createFromString('foo'),
        ])->shouldReturn([]);
    }
}
