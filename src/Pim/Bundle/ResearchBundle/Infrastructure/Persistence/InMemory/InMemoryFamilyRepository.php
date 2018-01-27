<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;

class InMemoryFamilyRepository implements FamilyRepository, InMemoryRepository
{
    /** @var Family[] */
    private $storage = [];

    public function withCode(FamilyCode $familyCode): ?Family
    {
        return $this->storage[$familyCode->getValue()] ?? null;
    }

    public function add($family): void
    {
        if (!$family instanceof Family) {
            throw new \invalidargumentexception('Family class expected in argument.');
        }
        $this->storage[$family->code()->getValue()] = $family;
    }
}
