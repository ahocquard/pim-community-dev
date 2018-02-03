<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyRepository;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class FamilyContext implements Context
{
    /** @var FamilyRepository */
    protected $repository;

    /** @var EntityFixtureLoader */
    protected $loader;

    public function __construct(FamilyRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Given a family named :tshirt
     */
    public function aFamilyNamed($tshirt): void
    {

    }

    /**
     * @When I send the following request
     */
    public function sendRequest(): void
    {

    }

    /**
     * @Then I get the following response
     */
    public function receiveResponse(): void
    {

    }
}
