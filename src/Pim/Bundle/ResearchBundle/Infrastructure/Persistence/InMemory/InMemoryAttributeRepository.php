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

    public function withCode(AttributeCode $attributeCode): ?Attribute
    {
        return $this->storage[$attributeCode->getValue()] ?? null;
    }

    public function withCodes(array $attributeCodes): array
    {
        $attributes = [];
        foreach ($attributeCodes as $attributeCode) {
            if (isset($this->storage[$attributeCode->getValue()])) {
                $attributes[] = $this->storage[$attributeCode->getValue()];
            }
        }

        return $attributes;
    }

    public function add(Attribute $attribute): void
    {
        $this->storage[$attribute->code()->getValue()] = $attribute;
    }
}
