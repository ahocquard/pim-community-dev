<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Cache;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;

class CachedAttributeRepository implements AttributeRepository
{
    /** @var Attribute[] */
    private $storage = [];

    /** @var AttributeRepository */
    private $attributeRepository;

    /**
     * @param AttributeRepository $attributeRepository
     */
    public function __construct(AttributeRepository $attributeRepository)
    {
        $this->attributeRepository = $attributeRepository;
    }

    public function withCode(AttributeCode $attributeCode): ?Attribute
    {
        if (isset($this->storage[$attributeCode->getValue()])) {
            return $this->storage[$attributeCode->getValue()];
        }

        $attribute = $this->attributeRepository->withCode($attributeCode);
        if (null !== $attribute) {
            $this->storage[$attributeCode->getValue()] = $attribute;
        }

        return $attribute;
    }

    public function withCodes(array $attributeCodes): array
    {
        $notCachedAttributes = [];
        $attributes = [];
        foreach ($attributeCodes as $attributeCode) {
            if (isset($this->storage[$attributeCode->getValue()])) {
                $attributes[] = $this->storage[$attributeCode->getValue()];
            } else {
                $notCachedAttributes[] = $attributeCode;
            }
        }

        $resolvedAttributes = $this->attributeRepository->withCodes($notCachedAttributes);
        foreach ($resolvedAttributes as $resolvedAttribute) {
            $this->storage[$resolvedAttribute->code()->getValue()] = $resolvedAttribute;
            $attributes[] = $resolvedAttribute;
        }

        return $attributes;
    }
}
