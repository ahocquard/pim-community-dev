<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Type;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\ResolveInfo;
use GraphQL\Type\Definition\Type;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Currency\Currency;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\Locale;
use Pim\Bundle\ResearchBundle\Infrastructure\Delivery\API\GraphQL\Types;

class CurrencyType extends ObjectType
{
    public function __construct()
    {
        $config = [
            'name' => 'Currency',
            'description' => 'Currency',
            'fields' => function() {
                return [
                    'code' => Type::string(),
                    'enabled' => Type::boolean()
                ];
            },
            'resolveField' => function(Currency $currency, $args, $context, ResolveInfo $info) {
                switch ($info->fieldName) {
                    case 'code':
                        return $currency->code()->getValue();
                    case 'enabled':
                        return $currency->enabled();
                    default:
                        return null;
                }
            }
        ];
        parent::__construct($config);
    }
}
