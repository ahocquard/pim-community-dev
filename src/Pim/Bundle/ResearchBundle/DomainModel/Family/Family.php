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
    private $attributeAsLabel;

    public function __construct(
        FamilyCode $code,
        \DateTimeInterface $created,
        \DateTimeInterface $updated,
        ?AttributeCode $attributeAsLabel
    ) {
        $this->code = $code;
        $this->created = $created;
        $this->updated = $updated;
        $this->attributeAsLabel = $attributeAsLabel;
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

    public function attributeAsLabel(): ?AttributeCode
    {
        return $this->attributeAsLabel;
    }
}
