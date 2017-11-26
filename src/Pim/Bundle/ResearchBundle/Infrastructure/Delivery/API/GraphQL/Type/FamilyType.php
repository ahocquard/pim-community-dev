<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class FamilyType extends ObjectType
{
    public function __construct(Types $types)
    {
        $config = [
            'name' => 'Family',
            'description' => 'Family',
            'fields' => function() use ($types) {
                return [
                    'code' => Type::string(),
                    'created' => Type::string(),
                    'updated' => Type::string(),
                ];
            },
            'resolveField' => function(Family $family, $args, $context, ResolveInfo $info) {
                switch ($info->fieldName) {
                    case 'code':
                        return $family->code()->getValue();
                    case 'created':
                        return $family->created()->format(\DateTime::ISO8601);
                    case 'updated':
                        return $family->updated()->format(\DateTime::ISO8601);
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
