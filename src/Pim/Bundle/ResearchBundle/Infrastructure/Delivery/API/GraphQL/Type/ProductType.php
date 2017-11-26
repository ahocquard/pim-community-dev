<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\BooleanType;
use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\StringType;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class ProductType extends ObjectType
{
    public function __construct(Types $types)
    {
        $config = [
            'name' => 'Product',
            'description' => 'Product',
            'fields' => function() use ($types) {
                return [
                    'identifier' => Type::string(),
                    'created' => Type::string(),
                    'updated' => Type::string(),
                    'enabled' => Type::boolean(),
                    'family' => $types->get(FamilyType::class)
                ];
            },
            'resolveField' => function(Product $product, $args, $context, ResolveInfo $info) {
                switch ($info->fieldName) {
                    case 'identifier':
                        return $product->identifier()->getValue();
                    case 'created':
                        return $product->created()->format(\DateTime::ISO8601);
                    case 'updated':
                        return $product->updated()->format(\DateTime::ISO8601);
                    case 'enabled':
                        return $product->updated()->format(\DateTime::ISO8601);
                    case 'family':
                        return new Family(
                            FamilyCode::createFromString('family_code'),
                            new \DateTimeImmutable('2017-05-07T00:00:00+01:00'),
                            new \DateTimeImmutable('2017-05-08T00:00:00+01:00')
                        );
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
