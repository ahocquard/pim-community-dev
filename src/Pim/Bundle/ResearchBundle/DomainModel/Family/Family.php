<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Family;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;

class Family
{
    /** @var FamilyCode */
    private $code;

    /** @var \DateTimeInterface */
    private $created;

    /** @var \DateTimeInterface */
    private $updated;

    /** @var AttributeCode */
    private $attributeAsLabelCode;

    /** @var AttributeCode[] */
    private $attributeCodes = [];

    public function __construct(
        FamilyCode $code,
        \DateTimeInterface $created,
        \DateTimeInterface $updated,
        array $attributeCodes,
        ?AttributeCode $attributeAsLabelCode
    ) {
        $this->code = $code;
        $this->created = $created instanceof \DateTimeImmutable ? $created : \DateTimeImmutable::createFromMutable($created);
        $this->updated = $updated instanceof \DatetimeImmutable ? $updated : \DateTimeImmutable::createFromMutable($updated);
        $this->attributeAsLabelCode = $attributeAsLabelCode;

        $this->attributeCodes = (function(AttributeCode ...$attributeCode) {
            return $attributeCode;
        })(...$attributeCodes);
    }

    public function code(): FamilyCode
    {
        return $this->code;
    }

    public function created(): \DateTimeInterface
    {
        return $this->created;
    }

    public function updated(): \DateTimeInterface
    {
        return $this->updated;
    }

    public function attributeCodes(): array
    {
        return $this->attributeCodes;
    }

    public function attributeAsLabelCode(): ?AttributeCode
    {
        return $this->attributeAsLabelCode;
    }

    public function hasAttributeAsLabel(): bool
    {
        return null !== $this->attributeAsLabelCode;
    }
}
