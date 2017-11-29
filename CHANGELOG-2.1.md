# 2.1

## Improvements 

- PIM-6966: Add tracker information for product model, product variant and family variant

## BC breaks

### Constructors

- Change the constructor of `Pim\Bundle\DataGridBundle\Normalizer\ProductNormalizer` to add `Pim\Bundle\EnrichBundle\Normalizer\ImageNormalizer` parameter
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\EntityWithFamilyVariantNormalizer` to replace `Pim\Bundle\EnrichBundle\Normalizer\FileNormalizer` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\ProductModelNormalizer` to replace `Symfony\Component\Serializer\Normalizer\NormalizerInterface` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\ProductNormalizer` to replace `Symfony\Component\Serializer\Normalizer\NormalizerInterface` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Component\Catalog\Validator\Constraints\FamilyAttributeAsImageValidator` to add a `string[]`
- Change the constructor of `Pim\Bundle\AnalyticsBundle\DataCollector\DBDataCollector` to add a `Pim\Component\Catalog\Repository\ProductModelRepositoryInterface`, `Pim\Component\Catalog\Repository\VariantProductRepositoryInterface` and `Pim\Component\Catalog\Repository\FamilyVariantRepositoryInterface`

### Methods

- Add optional parameter `$scopeCode` to the method `getLabel` of `Pim\Component\Catalog\Model\ProductModelInterface`
- Add optional parameter `$scopeCode` to the method `getLabel` of `Pim\Component\Catalog\Model\ProductInterface`
- Remove method `countAll` in `Pim\Component\Catalog\Repository\FamilyInterface`, `Pim\Component\Catalog\Repository\AttributeRepositoryInterface`, `Pim\Component\Catalog\Repository\VariantProductRepositoryInterface` and `Pim\Bundle\UserBundle\Repository\UserRepositoryInterface`
- Add `Pim\Bundle\AnalyticsBundle\Repository\EntityCountableRepository` with method `countAll`
