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
            'name' => 'family',
            'description' => 'Family',
            'fields' => function() use ($types) {
                return [
                    'code' => Type::string(),
                    'created' => Type::string(),
                    'updated' => Type::string(),
                    'attributes' => Type::listOf($types->get(AttributeType::class)),
                    'attribute_as_label' => $types->get(AttributeType::class),
                    'attribute_as_image' => $types->get(AttributeType::class),
                    'attribute_requirements' => Type::listOf($types->get(AttributeRequirementType::class)),
                    'labels' => Type::listOf($types->get(LabelType::class)),
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
                        return $family->hasAttributeAsLabel() ?
                            $attributeRepository->withCode($family->attributeAsLabelCode()) : null;
                    case 'attribute_as_image':
                        return $family->hasAttributeAsImage() ?
                            $attributeRepository->withCode($family->attributeAsImageCode()) : null;
                    case 'attribute_requirements':
                        return $family->attributeRequirements();
                    case 'labels':
                        return $family->labels();
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
