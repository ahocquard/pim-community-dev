<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryRepository;

class InMemoryCategoryRepository implements CategoryRepository, InMemoryRepository
{
    /** @var Category[] */
    private $storage = [];

    public function withCode(CategoryCode $categoryCode): ?Category
    {
        return $this->storage[$categoryCode->getValue()] ?? null;
    }

    public function add($category): void
    {
        if (!$category instanceof Category) {
            throw new \invalidargumentexception('Category class expected in argument.');
        }
        $this->storage[$category->code()->getValue()] = $category;
    }
}
