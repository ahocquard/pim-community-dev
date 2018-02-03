<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\CurrencyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleRepository;
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

    /** @var LocaleRepository */
    private $localeRepository;

    /** @var CurrencyRepository */
    private $currencyRepository;

    public function __construct(
        Types $types,
        ProductRepository $productRepository,
        FamilyRepository $familyRepository,
        LocaleRepository $localeRepository,
        CurrencyRepository $currencyRepository
    ) {
        $this->types = $types;
        $this->productRepository = $productRepository;
        $this->familyRepository = $familyRepository;
        $this->localeRepository = $localeRepository;
        $this->currencyRepository = $currencyRepository;

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
                'locale' => [
                    'type' => $types->get(LocaleType::class),
                    'description' => 'Returns locale by its a code',
                    'args' => [
                        'code' => Type::nonNull(Type::string()),
                    ],
                    'resolve' => function($root, $args) {
                        return $this->localeRepository->withCode(LocaleCode::createFromString($args['code']));
                    }
                ],
                'currency' => [
                    'type' => $types->get(CurrencyType::class),
                    'description' => 'Returns currency by its a code',
                    'args' => [
                        'code' => Type::nonNull(Type::string()),
                    ],
                    'resolve' => function($root, $args) {
                        return $this->currencyRepository->withCode(CurrencyCode::createFromString($args['code']));
                    }
                ],
            ]
        ];
        parent::__construct($config);
    }
}
