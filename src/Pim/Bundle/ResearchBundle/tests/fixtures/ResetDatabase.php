<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures;

use Doctrine\ORM\EntityManagerInterface;

class ResetDatabase
{
    /** @var EntityManagerInterface */
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function byDeletingRows()
    {
        $connection = $this->entityManager->getConnection();
        $schemaManager = $connection->getSchemaManager();
        $tables = $schemaManager->listTableNames();
        $sql = 'SET FOREIGN_KEY_CHECKS = 0;';

        foreach($tables as $table) {
            $sql .= sprintf('DELETE FROM %s ;', $table);
        }

        $sql .= 'SET FOREIGN_KEY_CHECKS = 1;';
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->execute();
    }

    public function byTruncatingTable()
    {
        $connection = $this->entityManager->getConnection();
        $schemaManager = $connection->getSchemaManager();
        $tables = $schemaManager->listTables();
        $sql = 'SET FOREIGN_KEY_CHECKS = 0;';

        foreach($tables as $table) {
            $sql .= sprintf('TRUNCATE %s ;', $table->getName());
        }

        $sql .= 'SET FOREIGN_KEY_CHECKS = 1;';
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->execute();
    }
}
