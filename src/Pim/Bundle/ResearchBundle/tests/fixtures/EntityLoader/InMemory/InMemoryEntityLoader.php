<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\InMemory;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryAttributeRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory\InMemoryRepository;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class InMemoryEntityLoader implements EntityFixtureLoader
{
    /** @var InMemoryRepository */
    private $repository;

    /**
     * @param InMemoryRepository $repository
     */
    public function __construct(InMemoryRepository $repository)
    {
        $this->repository = $repository;
    }

    public function load($attribute): void
    {
        $this->repository->add($attribute);
    }
}
