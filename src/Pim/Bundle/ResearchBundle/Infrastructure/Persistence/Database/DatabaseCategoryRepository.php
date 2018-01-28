<?php

declare(strict_types=1);

namespace Pim\Bundle\ResearchBundle\Infrastructure\Persistence\Database;

use Doctrine\DBAL\Types\Type;
use Doctrine\ORM\EntityManagerInterface;
use Pim\Bundle\ResearchBundle\DomainModel\Category\Category;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryCode;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryLabel;
use Pim\Bundle\ResearchBundle\DomainModel\Category\CategoryRepository;
use Pim\Bundle\ResearchBundle\DomainModel\Locale\LocaleCode;

class DatabaseCategoryRepository implements CategoryRepository
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

    public function withCode(CategoryCode $categoryCode): ?Category
    {
        $sql = <<<SQL
            SELECT 
				c.code,
                parent.code as parent_code,
                JSON_ARRAYAGG(
                    JSON_OBJECT(
                        'locale', ct.locale,
                        'label', ct.label
                    )
                ) as translations
            FROM pim_catalog_category c
            LEFT JOIN pim_catalog_category parent on parent.id = c.parent_id
            LEFT JOIN pim_catalog_category_translation ct on ct.foreign_key = c.id
            WHERE c.code = :code
            GROUP BY c.code
SQL;

        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('code', $categoryCode->getValue());
        $stmt->execute();
        $rows = $stmt->fetchAll();

        if (empty($rows)) {
            return null;
        }

        $platform = $this->entityManager->getConnection()->getDatabasePlatform();

        $parentCode = Type::getType(Type::STRING)->convertToPhpValue($rows[0]['parent_code'], $platform);
        $translations = Type::getType(Type::STRING)->convertToPhpValue($rows[0]['translations'], $platform);

        $labels =[];
        $decodedTranslations = json_decode($translations, true);
        foreach ($decodedTranslations as $translation) {
            if (isset($translation['locale'])) {
                $labels[] = CategoryLabel::createFromLocaleCode(LocaleCode::createFromString($translation['locale']), $translation['label']);
            }
        }

        return new Category(
            $categoryCode,
            null !== $parentCode ? CategoryCode::createFromString($parentCode) : null,
            $labels
        );
    }
}
