<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class AttributeRequirementType extends ObjectType
{
    public function __construct(
        Types $types,
        ChannelRepository $channelRepository,
        AttributeRepository $attributeRepository
    ) {
        $config = [
            'name' => 'family_requirement',
            'description' => 'Family requirement',
            'fields' => function() use ($types) {
                return [
                    'channel' => $types->get(ChannelType::class),
                    'attributes' => Type::listOf($types->get(AttributeType::class)),
                ];
            },
            'resolveField' => function(AttributeRequirement $attributeRequirement, $args, $context, ResolveInfo $info)
            use ($channelRepository, $attributeRepository) {
                switch ($info->fieldName) {
                    case 'channel':
                        return $channelRepository->withCode($attributeRequirement->channelCode());
                    case 'attributes':
                        return $attributeRepository->withCodes($attributeRequirement->requiredAttributeCodes());
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
