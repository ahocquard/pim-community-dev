<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\tests\fixtures\EntityLoader\EntityFixtureLoader;

class AttributeLoader implements EntityFixtureLoader
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

    public function load($attribute): void
    {
        $sql = <<<SQL
            INSERT INTO pim_catalog_attribute (
                code, 
                attribute_type, 
                is_localizable,
                is_scopable, 
                sort_order, 
                is_required,
                is_unique,
                entity_type,
                backend_type,
                created,
                updated
            )
            VALUES (
                :code,
                :attribute_type,
                :is_localizable,
                :is_scopable,
                :sort_order,
                :is_required,
                :is_unique,
                :entity_type,
                :backend_type,
                :created,
                :updated
            )
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $attribute->code()->getValue(), Type::STRING);
        $stmt->bindValue('attribute_type', $attribute->type(), Type::STRING);
        $stmt->bindValue('is_localizable', $attribute->localizable(), Type::BOOLEAN);
        $stmt->bindValue('is_scopable', $attribute->scopable(), Type::BOOLEAN);
        $stmt->bindValue('sort_order', 1, Type::INTEGER);
        $stmt->bindValue('is_required', true, Type::BOOLEAN);
        $stmt->bindValue('is_unique', true, Type::BOOLEAN);
        $stmt->bindValue('entity_type', 'Pim\Component\Catalog\Model\Product\'', Type::STRING);
        $stmt->bindValue('backend_type', 'text', Type::STRING);
        $stmt->bindValue('created', new \DateTime(), Type::DATETIME);
        $stmt->bindValue('updated', new \DateTime(), Type::DATETIME);
        $stmt->execute();
    }
}
