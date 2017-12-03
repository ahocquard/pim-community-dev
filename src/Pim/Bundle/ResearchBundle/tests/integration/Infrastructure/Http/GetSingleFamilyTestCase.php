<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\Http;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\tests\fixtures\LoadFixtures;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetSingleFamilyTestCase extends WebTestCase
{
    public function test_controller_echo()
    {
        $query = <<<GRAPHQL
{ echo(message: \"Hello World\") }
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
        "echo": "Hello World"
    }
}
JSON;


        Assert::assertJsonStringEqualsJsonString($expectedResponse, $response->getContent());
    }

    public function test_get_a_complete_family()
    {
        $query = <<<GRAPHQL
{ family(code: \"family_code\") { code, created, updated, attribute_as_label { code } } }
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
        "family": {
            "code": "family_code",
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100",
            "attribute_as_label": {
                "code": "attribute_code"
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
