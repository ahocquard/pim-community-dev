# 2.1

## Improvements

- PIM-6480: Add gallery view and display selector to the product grid
- PIM-6621: add search on label and code on products and product models
- PIM-6996: Associate products to product models during import using the `<assocType>-productmodels` pattern in an new column


## BC breaks

### Constructors

- Change the constructor of `Pim\Bundle\DataGridBundle\Normalizer\ProductNormalizer` to add `Pim\Bundle\EnrichBundle\Normalizer\ImageNormalizer` parameter
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\EntityWithFamilyVariantNormalizer` to replace `Pim\Bundle\EnrichBundle\Normalizer\FileNormalizer` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\ProductModelNormalizer` to replace `Symfony\Component\Serializer\Normalizer\NormalizerInterface` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Bundle\EnrichBundle\Normalizer\ProductNormalizer` to replace `Symfony\Component\Serializer\Normalizer\NormalizerInterface` parameter by `Symfony\Component\Serializer\Normalizer\NormalizerInterface`
- Change the constructor of `Pim\Component\Catalog\Validator\Constraints\FamilyAttributeAsImageValidator` to add a `string[]`
- Change the constructor of `Pim\Component\Catalog\Updater\Adder\AssociationFieldAdder` to add `Akeneo\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface` parameter as a 2nd argument
- Change the constructor of `Pim\Component\Catalog\Updater\Adder\AssociationFieldSetter` to add `Akeneo\Component\StorageUtils\Repository\IdentifiableObjectRepositoryInterface` parameter as a 2nd argument

### Methods

- Add optional parameter `$scopeCode` to the method `getLabel` of `Pim\Component\Catalog\Model\ProductModelInterface`
- Add optional parameter `$scopeCode` to the method `getLabel` of `Pim\Component\Catalog\Model\ProductInterface`

### Interfaces

- Added `getProductModels`, `setProductModels`, `addProductModel`, `hasProductModel` and `removeProductModel` to `Pim\Component\Catalog\Model\AssociationInterface`
