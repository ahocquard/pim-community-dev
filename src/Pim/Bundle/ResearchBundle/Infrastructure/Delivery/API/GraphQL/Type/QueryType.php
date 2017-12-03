<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class QueryType extends ObjectType
{
    /** @var Types */
    private $types;

    /** @var ProductRepository */
    private $productRepository;

    /** @var FamilyRepository */
    private $familyRepository;

    public function __construct(Types $types, ProductRepository $productRepository, FamilyRepository $familyRepository)
    {
        $this->types = $types;
        $this->productRepository = $productRepository;
        $this->familyRepository = $familyRepository;

        $config = [
            'name' => 'Query',
            'fields' => [
                'product' => [
                    'type' => $types->get(ProductType::class),
                    'description' => 'Return a product by its identifier',
                    'args' => [
                        'identifier' => Type::nonNull(Type::string()),
                    ],
                    'resolve' => function($root, $args) {
                        return $this->productRepository->withIdentifier(
                            ProductIdentifier::createFromString($args['identifier'])
                        );
                    }
                ],
                'family' => [
                    'type' => $types->get(FamilyType::class),
                    'description' => 'Returns family by its a code',
                    'args' => [
                        'code' => Type::nonNull(Type::string()),
                     ],
                    'resolve' => function($root, $args) {
                        return $this->familyRepository->withCode(FamilyCode::createFromString($args['code']));
                    }
                ],
                'echo' => [
                    'type' => Type::string(),
                    'args' => [
                        'message' => ['type' => Type::string()],
                    ],
                    'resolve' => function ($root, $args) {
                        return $args['message'];
                    }
                ],

            ]
        ];
        parent::__construct($config);
    }
}
