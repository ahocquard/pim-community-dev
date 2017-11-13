<?php

namespace Pim\Bundle\ResearchBundle\tests\integration\Infrastructure;

use Akeneo\Test\Integration\Configuration;
use Akeneo\Test\IntegrationTestsBundle\Loader\DatabaseSchemaHandler;
use Doctrine\DBAL\Types\Type;
use PHPUnit\Framework\Assert;
use Pim\Bundle\ApiBundle\tests\integration\ApiTestCase;
use Pim\Bundle\ResearchBundle\DomainModel\Family\Family;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductId;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseFamilyRepository;
use Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database\DatabaseProductRepository;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\HttpFoundation\Response;

class DatabaseFamilyRepositoryTestCase extends KernelTestCase
{
    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        static::bootKernel(['debug' => false]);
        $databaseSchemaHandler = new DatabaseSchemaHandler(static::$kernel);
        $databaseSchemaHandler->reset();

        $family = new Family(
            FamilyId::createFromString('1'),
            FamilyCode::createFromString('family_code'),
            new \DateTime('2017-05-07T00:00:00+01:00'),
            new \DateTime('2017-05-08T00:00:00+01:00')
        );

        $this->persistFamilyInDatabase($family);
    }

    public function test_with_code_on_persisted_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.infrastructure.persistence.database.database_family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('family_code'));
        Assert::assertNotNull($family);
        Assert::assertEquals('1', $family->id()->getValue());
        Assert::assertEquals('family_code', $family->code()->getValue());
        Assert::assertEquals(new \DateTime('2017-05-07T00:00:00+01:00'), $family->created());
        Assert::assertEquals(new \DateTime('2017-05-08T00:00:00+01:00'), $family->updated());
    }

    public function test_with_code_on_non_existing_family()
    {
        $repository = static::$kernel->getContainer()->get('pim_research.infrastructure.persistence.database.database_family_repository');

        $family = $repository->withCode(FamilyCode::createFromString('foo'));
        Assert::assertNull($family);
    }

    private function persistFamilyInDatabase(Family $family)
    {
        $entityManager = static::$kernel->getContainer()->get('doctrine.orm.entity_manager');

        $sql = <<<SQL
INSERT INTO pim_catalog_family (id, code, created, updated)
VALUES (:id, :code, :created, :updated)
SQL;

        $stmt = $entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('id', $family->id()->getValue(), Type::INTEGER);
        $stmt->bindValue('code', $family->code()->getValue(), Type::STRING);
        $stmt->bindValue('created', $family->created(), Type::DATETIME);
        $stmt->bindValue('updated', $family->updated(), Type::DATETIME);
        $stmt->execute();
    }
}
