<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class CurrencyLoader implements EntityFixtureLoader
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function load($currency): void
    {
        $sql = <<<SQL
            INSERT INTO pim_catalog_currency(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $currency->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $currency->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }
}
