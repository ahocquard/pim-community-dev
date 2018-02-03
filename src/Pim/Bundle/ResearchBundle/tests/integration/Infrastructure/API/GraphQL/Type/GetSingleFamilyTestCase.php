<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure\API\GrapgQL\Type;

use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\tests\fixtures\LoadFixtures;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class GetSingleFamilyTestCase extends WebTestCase
{
    public function test_get_a_complete_family()
    {
        $query = <<<GRAPHQL
{ 
    family(code: \"family_code\") {
        code,
        created,
        updated,
        attributes {
            code
        },
        attribute_as_label {
            code
        }
    }
}
GRAPHQL;

        $expectedResponse = <<<JSON
{
    "data": {
        "family": {
            "code": "family_code",
            "created": "2017-05-07T00:00:00+0100",
            "updated": "2017-05-08T00:00:00+0100",
            "attributes": [
                {
                    "code": "attribute_as_label_code"
                },
                {
                    "code": "attribute_code"
                }
            ],
            "attribute_as_label": {
                "code": "attribute_as_label_code"
            }
        }
    }
}
JSON;

        $this->assertRequest($query, $expectedResponse);
    }

    protected static function createClient(array $options = [], array $server = [])
    {
        $client = parent::createClient($options, $server);
        //(new LoadFixtures(static::$kernel->getContainer()))();

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
