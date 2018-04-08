<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product;

use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Group\GroupCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Association\Association;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Value\ProductValue;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Value\ProductValueCollection;

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
    private $familyCode;

    /** @var CategoryCode[] */
    private $categoryCodes;

    /** @var GroupCode[] */
    private $groupCodes;

    /** @var Association[] */
    private $associations;

    /** @var ProductValueCollection */
    private $productValues;

    public function __construct(
        ProductIdentifier $identifier,
        \DateTimeInterface $created,
        \DateTimeInterface $updated,
        bool $enabled,
        ?FamilyCode $familyCode,
        ProductValueCollection $productValues,
        array $categoryCodes,
        array $groupCodes,
        array $associations
    ) {
        $this->identifier = $identifier;
        $this->created = $created;
        $this->updated = $updated;
        $this->enabled = $enabled;
        $this->familyCode = $familyCode;
        $this->productValues = $productValues;

        $this->categoryCodes = (function(CategoryCode ...$categoryCode) {
            return $categoryCode;
        })(...$categoryCodes);

        $this->groupCodes = (function(GroupCode ...$groupCode) {
            return $groupCode;
        })(...$groupCodes);

        $this->associations = (function(Association ...$association) {
            return $association;
        })(...$associations);

    }

    public function identifier(): ProductIdentifier
    {
        return $this->identifier;
    }

    public function created(): \DateTimeInterface
    {
        return $this->created;
    }

    public function updated(): \DateTimeInterface
    {
        return $this->updated;
    }

    public function isEnable(): bool
    {
        return $this->enabled;
    }

    public function familyCode(): ?FamilyCode
    {
        return $this->familyCode;
    }

    public function categoryCodes(): array
    {
        return $this->categoryCodes;
    }

    public function groupCodes(): array
    {
        return $this->groupCodes;
    }

    public function associations(): array
    {
        return $this->associations;
    }

    public function productValues(): ProductValueCollection
    {
        return $this->productValues;
    }
}
