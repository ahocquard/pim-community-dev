<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\API\GrapgQL\Type;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\tests\fixtures\LoadFixtures;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetSingleProductTestCase extends WebTestCase
{
    public function test_get_a_complete_product()
    {
        $query = <<<GRAPHQL
{ 
    product() {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
            values {
              
            a
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_2()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_3()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_4()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_5()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_6()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_7()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_8()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_9()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_10()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_11()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_12()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_13()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_14()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_15()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_16()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_17()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_18()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_19()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_20()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_21()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_22()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_23()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_24()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_25()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_26()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_27()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_28()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_29()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_30()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_31()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_32()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_33()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_34()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_35()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_36()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_37()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_38()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_39()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_40()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_41()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_42()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_43()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_44()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_45()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_46()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_47()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_48()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_49()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_50()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_51()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_52()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_53()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_54()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_55()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_56()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_57()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_58()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_59()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_60()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_61()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_62()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_63()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_64()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_65()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_66()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_67()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_68()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_69()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_70()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_71()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_72()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_73()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_74()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_75()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_76()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_77()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_78()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_79()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_80()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_81()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_82()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_83()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_84()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_85()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_86()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_87()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_88()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_89()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_90()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_91()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_92()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_93()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_94()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_95()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_96()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_97()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_98()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_99()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_100()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_101()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_102()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_103()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_104()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_105()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_106()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_107()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_108()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_109()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_110()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_111()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_112()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_113()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_114()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_115()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_116()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_117()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_118()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_119()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_120()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_121()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_122()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_123()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_124()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_125()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_126()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_127()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_128()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_129()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_130()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_131()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_132()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_133()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_134()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_135()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_136()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_137()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_138()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_139()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_140()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_141()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_142()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_143()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_144()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_145()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_146()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_147()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_148()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_149()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_150()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_151()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_152()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_153()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_154()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_155()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_156()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_157()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_158()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_159()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_160()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_161()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_162()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_163()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_164()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_165()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_166()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_167()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_168()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_169()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_170()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_171()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_172()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_173()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_174()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_175()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_176()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_177()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_178()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_179()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_180()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_181()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_182()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_183()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_184()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_185()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_186()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_187()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_188()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_189()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_190()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_191()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_192()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_193()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_194()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_195()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_196()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_197()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_198()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_199()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_200()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_201()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_202()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_203()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_204()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_205()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_206()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_207()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_208()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_209()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_210()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_211()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_212()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_213()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_214()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_215()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_216()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_217()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_219()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_221()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_223()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_225()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_227()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_229()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_231()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_233()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_235()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_237()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_239()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_241()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_243()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_245()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_247()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_249()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_251()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_253()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_255()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_257()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_259()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_261()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_263()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_265()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_267()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_269()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_271()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_273()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_275()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_277()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_279()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_281()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_283()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_285()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_287()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_289()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_291()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_293()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_295()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_297()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_299()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_301()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_303()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_305()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_307()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_309()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_311()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_313()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_315()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_317()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_319()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_321()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_323()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_325()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_327()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_329()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_331()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_333()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_335()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_337()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_339()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_341()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_343()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_345()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_347()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_349()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_351()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_353()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_355()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_357()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_359()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_361()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_363()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_365()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_367()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_369()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_371()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_373()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_375()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_377()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_379()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_381()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_383()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_385()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_387()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_389()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_391()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_393()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_395()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_397()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_399()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_401()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_403()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_405()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_407()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_409()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_411()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_413()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_415()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_417()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_419()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_421()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_423()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_425()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_427()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_429()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_431()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_433()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_435()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_437()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_439()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_441()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_443()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_445()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_447()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_449()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_451()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_453()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_455()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_457()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_459()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_461()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_463()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_465()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_467()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_469()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_471()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_473()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_475()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_477()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_479()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_481()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_483()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_485()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_487()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_489()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_491()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_493()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_495()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_497()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_499()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_501()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_503()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_505()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_507()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_509()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_511()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_513()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_515()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_517()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_519()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_521()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_523()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_525()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_527()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_529()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_531()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_533()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_535()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_537()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_539()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_541()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_543()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_545()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_547()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_549()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_551()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_553()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_555()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_557()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_559()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_561()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_563()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_565()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_567()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_569()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_571()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_573()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_575()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_577()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_579()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_581()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_583()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_585()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_587()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_589()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_591()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_593()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_595()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_597()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_599()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_601()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_603()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_605()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_607()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_609()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_611()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_613()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_615()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_617()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_619()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_621()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_623()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_625()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_627()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_629()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_631()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_633()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_635()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_637()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_639()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_641()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_643()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_645()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_647()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_649()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_651()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_653()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_655()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_657()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_659()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_661()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_663()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_665()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_667()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_669()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_671()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_673()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_675()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_677()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_679()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_681()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_683()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_685()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_687()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_689()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_691()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_693()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_695()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_697()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_699()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_701()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_703()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_705()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_707()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_709()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_711()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_713()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_715()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_717()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_719()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_721()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_723()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_725()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_727()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_729()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_731()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_733()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_735()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_737()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_739()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_741()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_743()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_745()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_747()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_749()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_751()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_753()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_755()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_757()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_759()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_761()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_763()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_765()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_767()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_769()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_771()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_773()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_775()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_777()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_779()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_781()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_783()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_785()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_787()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_789()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_791()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_793()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_795()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_797()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_799()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_801()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_803()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_805()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_807()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_809()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_811()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_813()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_815()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_817()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_819()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_821()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_823()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_825()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_827()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_829()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_831()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_833()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_835()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_837()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_839()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_841()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_843()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_845()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_847()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_849()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_851()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_853()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_855()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_857()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_859()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_861()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_863()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_865()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_867()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_869()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_871()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_873()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_875()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_877()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_879()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_881()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_883()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_885()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_887()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_889()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_891()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_893()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_895()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_897()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_899()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_901()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_903()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_905()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_907()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_909()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_911()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_913()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_915()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_917()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_919()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_921()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_923()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_925()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_927()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_929()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_931()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_933()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_935()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_937()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_939()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_941()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_943()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_945()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_947()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_949()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_951()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_953()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_955()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_957()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_959()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_961()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_963()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_965()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_967()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_969()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_971()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_973()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_975()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_977()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_979()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_981()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_983()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_985()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_987()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_989()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_991()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_993()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_995()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_997()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_999()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1001()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1003()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1005()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1007()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1009()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1011()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1013()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1015()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1017()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1019()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1021()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1023()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1025()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1027()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1029()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1031()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1033()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1035()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1037()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1039()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1041()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1043()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1045()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1047()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1049()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1051()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1053()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1055()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1057()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1059()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1061()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1063()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1065()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1067()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1069()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1071()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1073()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1075()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1077()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1079()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1081()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1083()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1085()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1087()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1089()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1091()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1093()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1095()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1097()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1099()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1101()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1103()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1105()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1107()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1109()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1111()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1113()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1115()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1117()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1119()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1121()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1123()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1125()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1127()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1129()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1131()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1133()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1135()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1137()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1139()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1141()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1143()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1145()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1147()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1149()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1151()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1153()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1155()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1157()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1159()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1161()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1163()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1165()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1167()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1169()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1171()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1173()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1175()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1177()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1179()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1181()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1183()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1185()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1187()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1189()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1191()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1193()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1195()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1197()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1199()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1201()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1203()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1205()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1207()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1209()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1211()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1213()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1215()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1217()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1219()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1221()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1223()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1225()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1227()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1229()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1231()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1233()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1235()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1237()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1239()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1241()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1243()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1245()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1247()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1249()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1251()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1253()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1255()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1257()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1259()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1261()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1263()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1265()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1267()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1269()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1271()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1273()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1275()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1277()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1279()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1281()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1283()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1285()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1287()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1289()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1291()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1293()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1295()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1297()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1299()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1301()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1303()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1305()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1307()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1309()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1311()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1313()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1315()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1317()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1319()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1321()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1323()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1325()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1327()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1329()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1331()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1333()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1335()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1337()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1339()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1341()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1343()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1345()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1347()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1349()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1351()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1353()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1355()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1357()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1359()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1361()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1363()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1365()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1367()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1369()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1371()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1373()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1375()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1377()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1379()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1381()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1383()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1385()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1387()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1389()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1391()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1393()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1395()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1397()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1399()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1401()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1403()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1405()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1407()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1409()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1411()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1413()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1415()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1417()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1419()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1421()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1423()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1425()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1427()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1429()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1431()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1433()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1435()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1437()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1439()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1441()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1443()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1445()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1447()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1449()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1451()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1453()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1455()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1457()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1459()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1461()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1463()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1465()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1467()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1469()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1471()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1473()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1475()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1477()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1479()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1481()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1483()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1485()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1487()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1489()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1491()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1493()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1495()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1497()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1499()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1501()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1503()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1505()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1507()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1509()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1511()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1513()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1515()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1517()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1519()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1521()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1523()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1525()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1527()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1529()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1531()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1533()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1535()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1537()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1539()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1541()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1543()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1545()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1547()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1549()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1551()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1553()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1555()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1557()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1559()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1561()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1563()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1565()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1567()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1569()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1571()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1573()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1575()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1577()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1579()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1581()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1583()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1585()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1587()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1589()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1591()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1593()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1595()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1597()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1599()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1601()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1603()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1605()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1607()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1609()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1611()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1613()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1615()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1617()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1619()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1621()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1623()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1625()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1627()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1629()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1631()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1633()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1635()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1637()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1639()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1641()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1643()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1645()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1647()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1649()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1651()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1653()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1655()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1657()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1659()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1661()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1663()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1665()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1667()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1669()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1671()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1673()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1675()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1677()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1679()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1681()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1683()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1685()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1687()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1689()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1691()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1693()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1695()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1697()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1699()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1701()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1703()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1705()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1707()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1709()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1711()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1713()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1715()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1717()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1719()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1721()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1723()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1725()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1727()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1729()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1731()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1733()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1735()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1737()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1739()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1741()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1743()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1745()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1747()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1749()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1751()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1753()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1755()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1757()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1759()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1761()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1763()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1765()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1767()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1769()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1771()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1773()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1775()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1777()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1779()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1781()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1783()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1785()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1787()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1789()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1791()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1793()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1795()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1797()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1799()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1801()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1803()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1805()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1807()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1809()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1811()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    public function test_get_a_complete_product_1813()
    {
        $query = <<<GRAPHQL
{ 
    product(identifier: \"product_identifier\") {
        identifier, 
        enabled, 
        created, 
        updated 
    } 
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    protected static function createClient(array $options = [], array $server = [])
    {
        $client = parent::createClient($options, $server);
        (new LoadFixtures(static::$kernel->getContainer()))();

        return $client;
    }

    private function assertRequest(string $query, string $expectedResponse)
    {
        $query = str_replace(PHP_EOL, '', $query);
        $data = <<<JSON
{
  "query": "query $query"
}
JSON;

        $client = $this->createClient();
        $client->request('GET', 'graphql', [], [], [], $data);
        $response = $client->getResponse();

        Assert::assertJsonStringEqualsJsonString($expectedResponse, $response->getContent());
    }
}
