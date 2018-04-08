<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Value;

use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

/**
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ProductValueCollection
{
    private $valuesIndexedByAttribute = [];

    public function add(ProductValue $value)
    {
        $attributeCode = $value->attributeCode()->getValue();

        $this->valuesIndexedByAttribute[$attributeCode][] = $value;
    }

    public function valuesIndexedByAttribute(): array
    {
        return $this->valuesIndexedByAttribute;
    }
}
