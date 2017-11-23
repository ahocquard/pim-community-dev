<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product;

use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;

class Product
{
    /** @var ProductIdentifier */
    private $identifier;

    /** @var \DateTimeInterface */
    private $created;

    /** @var \DateTimeInterface */
    private $updated;

    /** @var bool */
    private $enabled;

    /** @var FamilyCode */
    private $family;

    /**
     * @param ProductIdentifier  $identifier
     * @param \DateTimeInterface $created
     * @param \DateTimeInterface $updated
     * @param bool               $enabled
     * @param FamilyCode         $family
     */
    public function __construct(
        ProductIdentifier $identifier,
        \DateTimeInterface $created,
        ?\DateTimeInterface $updated,
        bool $enabled,
        ?FamilyCode $family
    ) {
        $this->identifier = $identifier;
        $this->created = $created;
        $this->updated = $updated;
        $this->enabled = $enabled;
        $this->family = $family;
    }

    /**
     * @return ProductIdentifier
     */
    public function identifier(): ProductIdentifier
    {
        return $this->identifier;
    }

    /**
     * @return \DateTimeInterface
     */
    public function created(): \DateTimeInterface
    {
        return $this->created;
    }

    /**
     * @return \DateTimeInterface
     */
    public function updated(): ?\DateTimeInterface
    {
        return $this->updated;
    }

    /**
     * @return bool
     */
    public function isEnable(): bool
    {
        return $this->enabled;
    }

    public function family(): ?FamilyCode
    {
        return $this->family;
    }
}
