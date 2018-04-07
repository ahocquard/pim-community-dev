<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Association;

use Pim\Bundle\ResearchBundle\DomainModel\Group\GroupCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;

class Association
{
    /** @var AssociationType */
    private $associationType;

    /** @var GroupCode[] */
    private $groupCodes;

    /** @var ProductIdentifier[] */
    private $productIdentifiers;

    /**
     * @param AssociationType     $associationType
     * @param GroupCode[]         $groupCodes
     * @param ProductIdentifier[] $productIdentifiers
     */
    public function __construct(AssociationType $associationType, array $groupCodes, array $productIdentifiers)
    {
        $this->associationType = $associationType;
        $this->groupCodes = (function(GroupCode ...$groupCode) {
            return $groupCode;
        })(...$groupCodes);
        $this->productIdentifiers = (function(ProductIdentifier ...$productIdentifier) {
            return $productIdentifier;
        })(...$productIdentifiers);
    }
}
