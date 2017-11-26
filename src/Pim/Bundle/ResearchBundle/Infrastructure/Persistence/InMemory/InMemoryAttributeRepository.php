<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\InMemory;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;

class InMemoryAttributeRepository implements AttributeRepository
{
    /** @var Attribute[] */
    private $storage = [];

    public function withCode(AttributeCode $familyCode): ?Attribute
    {
        return $this->storage[$familyCode->getValue()] ?? null;
    }

    public function add(Attribute $attribute): void
    {
        $this->storage[$attribute->code()->getValue()] = $attribute;
    }
}
