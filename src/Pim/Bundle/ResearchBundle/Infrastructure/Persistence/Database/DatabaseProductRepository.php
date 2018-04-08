<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Family\FamilyCode;
use Pim\Bundle\ResearchBundle\DomainModel\Group\GroupCode;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Association\Association;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Association\AssociationType;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Product;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductIdentifier;
use Pim\Bundle\ResearchBundle\DomainModel\Product\ProductRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Product\Value\ValueCollectionFactory;

class DatabaseProductRepository implements ProductRepository
{
    /** @var EntityManagerInterface */
    private $entityManager;

    /** @var ValueCollectionFactory */
    private $valueCollectionFactory;

    /**
     * @param EntityManagerInterface $entityManager
     */
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
        $this->valueCollectionFactory = new ValueCollectionFactory();
    }

    public function withIdentifier(ProductIdentifier $productIdentifier): ?Product
    {
        $products = $this->withCodes([$productIdentifier]);

        return empty($products) ? null : $products[0];
    }

    public function withIdentifiers(array $productIdentifiers): array
    {
        if (empty($productIdentifiers)) {
            return [];
        }

        $sql = <<<SQL
            SELECT 
                p.identifier,
                p.created, 
                p.updated, 
                p.is_enabled, 
                p.raw_values,
                f.code as family_code,
                JSON_ARRAYAGG(c.code) as category_codes,
                JSON_ARRAYAGG(g.code) as group_codes
            FROM pim_catalog_product p
            LEFT JOIN pim_catalog_family f ON f.id = p.family_id
            LEFT JOIN pim_catalog_category_product cp on cp.product_id = p.id
            LEFT JOIN pim_catalog_category c on c.id = cp.category_id
            LEFT JOIN pim_catalog_group_product gp on gp.product_id = p.id
            LEFT JOIN pim_catalog_group g on g.id = gp.group_id
            WHERE p.identifier IN (:identifiers)
            GROUP BY p.identifier;
SQL;

        $connection = $this->entityManager->getConnection();
        $identifiers = array_map(function(ProductIdentifier $productIdentifier) {
            return $productIdentifier->getValue();
        }, $productIdentifiers);

        $stmt = $connection->executeQuery($sql,
            ['identifiers' => $identifiers],
            ['identifiers' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        );

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $rows = $stmt->fetchAll();
        $associations = $this->getAssociations($identifiers);

        $products = [];
        foreach ($rows as $row) {
            $identifier = Type::getType(Type::STRING)->convertToPhpValue($row['identifier'], $platform);
            $created = Type::getType(Type::DATETIME)->convertToPhpValue($row['created'], $platform);
            $updated = Type::getType(Type::DATETIME)->convertToPhpValue($row['updated'], $platform);
            $isEnabled = Type::getType(Type::BOOLEAN)->convertToPhpValue($row['is_enabled'], $platform);
            $familyCode = Type::getType(Type::STRING)->convertToPhpValue($row['family_code'], $platform);
            $rawValues = json_decode($row['raw_values'], true);

            $valueCollection = $this->valueCollectionFactory->createFromStorageFormat($rawValues);

            $products[] = new Product(
                ProductIdentifier::createFromString($identifier),
                $created,
                $updated,
                $isEnabled,
                null !== $familyCode ? FamilyCode::createFromString($familyCode) : null,
                $valueCollection,
                $this->hydrateCategoryCodes($row),
                $this->hydrateGroupCodes($row),
                $associations[$identifier]
            );
        }

        return $products;
    }

    private function hydrateCategoryCodes(array $row): array
    {
        $categoryCodes = [];
        if (isset($row['category_codes'])) {
            $decodedCategoryCodes = json_decode($row['category_codes'], true);
            if (null !== $decodedCategoryCodes) {
                foreach ($decodedCategoryCodes as $categoryCode) {
                    if (isset($categoryCode)) {
                        $categoryCodes[] = CategoryCode::createFromString($categoryCode);
                    }
                }
            }
        }

        return $categoryCodes;
    }

    private function hydrateGroupCodes(array $row): array
    {
        $groupCodes = [];
        if (isset($row['group_codes'])) {
            $decodedGroupCodes = json_decode($row['group_codes'], true);
            if (null !== $decodedGroupCodes) {
                foreach ($decodedGroupCodes as $groupCode) {
                    if (isset($groupCode)) {
                        $groupCodes[] = GroupCode::createFromString($groupCode);
                    }
                }
            }
        }

        return $groupCodes;
    }

    private function getAssociations(array $identifiers): array
    {
        $associations = [];
        foreach ($identifiers as $identifier) {
            $associations[$identifier] = [];
        }

        $sql = <<<SQL
            SELECT 
                product_association_per_code.identifier, 
                JSON_OBJECTAGG(
                    product_association_per_code.code, product_association_per_code.associations
                ) as associations
            FROM (
                SELECT 
                    p.identifier,
                    at.code, 
                    JSON_OBJECT(
                        'groups', JSON_ARRAYAGG(g.code),
                        'products', JSON_ARRAYAGG(p2.identifier)
                    ) as associations
                FROM pim_catalog_product p
                LEFT JOIN pim_catalog_association a on a.owner_id = p.id
                LEFT JOIN pim_catalog_association_type at on at.id = a.association_type_id
                LEFT JOIN pim_catalog_association_group ag on ag.association_id = a.id
                LEFT JOIN pim_catalog_group g on g.id = ag.group_id
                LEFT JOIN pim_catalog_association_product ap on ap.association_id = a.id
                LEFT JOIN pim_catalog_product p2 on p2.id = ap.product_id
                WHERE owner_id IS NOT NULL
                AND p.identifier IN (:identifiers)
                GROUP BY p.identifier, at.code
            ) as product_association_per_code
            GROUP BY product_association_per_code.identifier;
SQL;

        $connection = $this->entityManager->getConnection();

        $stmt = $connection->executeQuery($sql,
            ['identifiers' => $identifiers],
            ['identifiers' => \Doctrine\DBAL\Connection::PARAM_STR_ARRAY]
        );

        $rows = $stmt->fetchAll();
        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        foreach ($rows as $row) {
            $identifier = Type::getType(Type::STRING)->convertToPhpValue($row['identifier'], $platform);
            $decodedAssociations = json_decode($row['associations'], true);
            if (null !== $decodedAssociations) {
                foreach ($decodedAssociations as $associationType => $association) {
                    $groupCodes = [];
                    $productIdentifiers = [];
                    foreach ($association['groups'] as $groupCode) {
                        if (null !== $groupCode) {
                            $groupCodes[] = GroupCode::createFromString(
                                Type::getType(Type::STRING)->convertToPhpValue($groupCode, $platform)
                            );
                        }
                    }

                    foreach ($association['products'] as $productIdentifier) {
                        if (null !== $productIdentifier) {
                            $productIdentifiers[] = ProductIdentifier::createFromString(
                                Type::getType(Type::STRING)->convertToPhpValue($productIdentifier, $platform)
                            );
                        }
                    }
                }
            }

            $associations[$identifier][] = new Association(
                AssociationType::createFromString($associationType),
                $groupCodes,
                $productIdentifiers
            );
        }

        return $associations;
    }
}
