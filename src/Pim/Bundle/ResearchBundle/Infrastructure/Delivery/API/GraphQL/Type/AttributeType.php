<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class AttributeType extends ObjectType
{
    public function __construct(Types $types)
    {
        $config = [
            'name' => 'attribute',
            'description' => 'Attribute',
            'fields' => [
                'code' => [
                    'type' => Type::string() ,
                    'resolve' => function(Attribute $attribute) {
                        return $attribute->code()->getValue();
                    }
                ],
                'type' => [
                    'type' => Type::string() ,
                    'resolve' => function(Attribute $attribute) {
                        return $attribute->type();
                    }
                ],
                'localizable' => [
                    'type' => Type::boolean() ,
                    'resolve' => function(Attribute $attribute) {
                        return $attribute->localizable();
                    }
                ],
                'scopable' => [
                    'type' => Type::boolean(),
                    'resolve' => function(Attribute $attribute) {
                        return $attribute->scopable();
                    }
                ],
            ]

            //'resolveField' => function(Attribute $attribute, $args, $context, ResolveInfo $info) {
            //    switch ($info->fieldName) {
            //        case 'code':
            //            return $attribute->code()->getValue();
            //        case 'type':
            //            return $attribute->type();
            //        case 'localizable':
            //            return $attribute->localizable();
            //        case 'scopable':
            //            return $attribute->scopable();
            //        default:
            //            return null;
            //    }
            //}
        ];
        parent::__construct($config);
    }
}
