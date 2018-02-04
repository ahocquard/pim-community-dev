<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\contexts;

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\TableNode;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\Attribute;
use Pim\Bundle\ResearchBundle\DomainModel\Attribute\AttributeCode;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;
use Pim\Bundle\ResearchBundle\tests\fixtures\ResetDatabase;

class HookContext implements Context
{
    /** @var ResetDatabase */
    protected $resetDatabase;

    public function __construct(ResetDatabase $resetDatabase)
    {
        $this->resetDatabase = $resetDatabase;
    }

    /**
     * @BeforeScenario
     */
    public function resetDatabase(): void
    {
        $this->resetDatabase->byDeletingRows();
    }
}
