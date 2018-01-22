<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class LocaleLoader implements EntityFixtureLoader
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

    public function load($locale): void
    {
        $sql = <<<SQL
            INSERT INTO pim_catalog_locale(
                code, 
                is_activated
            )
            VALUES (
                :code,
                :is_activated
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $locale->code()->getValue(), Type::STRING);
        $stmt->bindValue('is_activated', $locale->enabled(), Type::BOOLEAN);
        $stmt->execute();
    }
}
