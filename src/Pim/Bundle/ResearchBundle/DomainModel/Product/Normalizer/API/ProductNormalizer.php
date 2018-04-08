<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\DomainModel\Product\Normalizer\API;

use Akeneo\Component\StorageUtils\Cursor\CursorInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Group\GroupCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Association\Association;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Value\ProductValueCollection;

/**
 * @author    Alexandre Hocquard <alexandre.hocquard@akeneo.com>
 * @copyright 2018 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
class ProductNormalizer
{
    public function normalizeMany(CursorInterface $products)
    {
        $normalizedProducts = [];
        foreach ($products as $product) {
            $normalizedProducts[] = $this->normalize($product);
        }

        return $normalizedProducts;
    }

    private function normalize(Product $product)
    {
        $categories = array_map(function(CategoryCode $categoryCode) {
            return $categoryCode->getValue();
        }, $product->categoryCodes());

        $groups = array_map(function(GroupCode $groupCode) {
            return $groupCode->getValue();
        }, $product->groupCodes());


        $associations = [];
        foreach ($product->associations() as $association) {
            $groupCodes = array_map(function(GroupCode $groupCode) {
                return $groupCode->getValue();
            }, $association->groupCodes());

            $productIdentifiers = array_map(function(ProductIdentifier $productIdentifier) {
                return $productIdentifier->getValue();
            }, $association->productIdentifiers());

            $associations[$association->associationType()->getValue()] = [
                'groups' => $groupCodes,
                'products' => $productIdentifiers,
            ];
        }

        $values = $this->normalizeValues($product->productValues());

        $data = [
            'identifier' => $product->identifier()->getValue(),
            'created' => $product->created()->format('c'),
            'updated' => $product->updated()->format('c'),
            'enabled' => $product->isEnable(),
            'family' => null !== $product->familyCode() ? $product->familyCode()->getValue() : null,
            'groups' => $groups,
            'categories' => $categories,
            'associations' => $associations,
            'values' => $values
        ];


        return $data;
    }

    private function normalizeValues(ProductValueCollection $values): array
    {
        $normalizedValues = [];

        foreach ($values->valuesIndexedByAttribute() as $attributeCode => $productValues) {
            foreach ($productValues as $productValue) {
                $normalizedValues[$attributeCode][] = [
                    'scope' => null != $productValue->channelCode() ? $productValue->channelCode()->getValue() : null,
                    'locale' => null !== $productValue->localeCode() ? $productValue->localeCode()->getValue() : null,
                    'data' => $productValue->data()
                ];
            }
        }

        return $normalizedValues;
    }
}
