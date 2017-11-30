<?php

namespace Pim\Component\Catalog\Model;

use Doctrine\Common\Collections\ArrayCollection;
use Pim\Component\Catalog\Model\ProductModelInterface;

/**
 * Association interface
 *
 * @author    Nicolas Dupont <nicolas@akeneo.com>
 * @copyright 2014 Akeneo SAS (http://www.akeneo.com)
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
interface AssociationInterface extends ReferableInterface
{
    /**
     * Get id
     *
     * @return int|string
     */
    public function getId();

    /**
     * Get products
     *
     * @return ProductInterface[]|ArrayCollection
     */
    public function getProducts();

    /**
     * Set products
     *
     * @param ProductInterface[] $products
     *
     * @return AssociationInterface
     */
    public function setProducts($products);

    /**
     * Add a product
     *
     * @param ProductInterface $product
     *
     * @return AssociationInterface
     */
    public function addProduct(ProductInterface $product);

    /**
     * Remove a product
     *
     * @param ProductInterface $product
     *
     * @return AssociationInterface
     */
    public function removeProduct(ProductInterface $product);

    /**
     * Has a product
     *
     * @param ProductInterface $product
     *
     * @return bool
     */
    public function hasProduct(ProductInterface $product);

    /**
     * Get product models
     *
     * @return ProductModelInterface[]|ArrayCollection
     */
    public function getProductModels();

    /**
     * Set product models
     *
     * @param ProductModelInterface[] $productModels
     */
    public function setProductModels($productModels): void;

    /**
     * Add a product model
     *
     * @param ProductModelInterface $productModel
     */
    public function addProductModel(ProductModelInterface $productModel): void;

    /**
     * Remove a product model
     *
     * @param ProductModelInterface $productModel
     */
    public function removeProductModel(ProductModelInterface $productModel): void;

    /**
     * Has a productModel
     *
     * @param ProductModelInterface $productModel
     *
     * @return bool
     */
    public function hasProductModel(ProductModelInterface $productModel);

    /**
     * Set groups
     *
     * @param GroupInterface[] $groups
     *
     * @return AssociationInterface
     */
    public function setGroups($groups);

    /**
     * Get association type
     *
     * @return AssociationTypeInterface
     */
    public function getAssociationType();

    /**
     * Set association type
     *
     * @param AssociationTypeInterface $associationType
     *
     * @return AssociationInterface
     */
    public function setAssociationType(AssociationTypeInterface $associationType);

    /**
     * Add a group
     *
     * @param GroupInterface $group
     *
     * @return AssociationInterface
     */
    public function addGroup(GroupInterface $group);

    /**
     * Get groups
     *
     * @return GroupInterface[]|ArrayCollection
     */
    public function getGroups();

    /**
     * Remove a group
     *
     * @param GroupInterface $group
     *
     * @return AssociationInterface
     */
    public function removeGroup(GroupInterface $group);

    /**
     * Get owner
     *
     * @return ProductInterface
     */
    public function getOwner();

    /**
     * Set owner
     *
     * @param ProductInterface $owner
     *
     * @return AssociationInterface
     */
    public function setOwner(ProductInterface $owner);
}
