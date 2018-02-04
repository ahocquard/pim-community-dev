<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\DomainModel\Channel\ChannelCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\AttributeRequirement;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;
use Symfony\Bundle\FrameworkBundle\Client;
use Symfony\Component\HttpFoundation\Response;

class RequestContext implements Context
{
    /** @var Client */
    protected $client;

    /** @var Response */
    protected $response;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    /**
     * @When I send the following request:
     */
    public function sendRequest(string $request): void
    {
        $query = addslashes($request);
        $query = str_replace(PHP_EOL, '', $query);
        $data = <<<JSON
{
  "query": "query $query"
}
JSON;

        $this->client->request('GET', 'graphql', [], [], [], $data);
        $this->response = $this->client->getResponse();


    }

    /**
     * @Then I get the following response:
     */
    public function receiveResponse(string $expectedResponse): void
    {
        $content = $this->response->getContent();
        Assert::assertJsonStringEqualsJsonString($expectedResponse, $content);

        $this->response = null;
    }
}
