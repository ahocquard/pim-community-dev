<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class FamilyType extends ObjectType
{
    public function __construct(Types $types, AttributeRepository $attributeRepository)
    {
        $config = [
            'name' => 'Family',
            'description' => 'Family',
            'fields' => function() use ($types) {
                return [
                    'code' => Type::string(),
                    'created' => Type::string(),
                    'updated' => Type::string(),
                    'attributes' => Type::listOf($types->get(AttributeType::class)),
                    'attribute_as_label' => $types->get(AttributeType::class)
                ];
            },
            'resolveField' => function(Family $family, $args, $context, ResolveInfo $info) use ($attributeRepository) {
                switch ($info->fieldName) {
                    case 'code':
                        return $family->code()->getValue();
                    case 'created':
                        return $family->created()->format(\DateTime::ISO8601);
                    case 'updated':
                        return $family->updated()->format(\DateTime::ISO8601);
                    case 'attributes':
                        return $attributeRepository->withCodes($family->attributeCodes());
                    case 'attribute_as_label':
                        return $attributeRepository->withCode($family->attributeAsLabelCode());
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
