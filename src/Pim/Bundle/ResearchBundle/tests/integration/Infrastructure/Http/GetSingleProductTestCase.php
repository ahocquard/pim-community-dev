<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Http;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\tests\fixtures\LoadFixtures;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetSingleProductTestCase extends WebTestCase
{
    public function test_get_a_complete_product()
    {
        $query = <<<GRAPHQL
{ product(identifier: \"product_identifier\") { identifier, enabled, created, updated } }
GRAPHQL;

        $data = <<<JSON
{
  "query": "query $query"
}
JSON;

        $client = $this->createClient();

        $client->request('GET', 'graphql', [], [], [], $data);

        $response = $client->getResponse();
        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "enabled": true,
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100"
        }
    }
}
JSON;

        Assert::assertJsonStringEqualsJsonString($expectedResponse, $response->getContent());
    }

    public function test_get_family_of_a_product()
    {
        $query = <<<GRAPHQL
{ product(identifier: \"product_identifier\") { identifier, family { code } } }
GRAPHQL;

        $data = <<<JSON
{
  "query": "query $query"
}
JSON;

        $client = $this->createClient();

        $client->request('GET', 'graphql', [], [], [], $data);

        $response = $client->getResponse();
        $expectedResponse = <<<JSON
{
    "data": {
        "product": {
            "identifier": "product_identifier",
            "family": {
                "code": "family_code"
            }
        }
    }
}
JSON;

        Assert::assertJsonStringEqualsJsonString($expectedResponse, $response->getContent());
    }

    protected static function createClient(array $options = [], array $server = [])
    {
        $client = parent::createClient($options, $server);
        (new LoadFixtures(static::$kernel->getContainer()))();

        return $client;
    }
}
