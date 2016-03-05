<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Product;

/**
 * ProductCategory
 */
class ProductCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var int
     */
    private $categoryOrder;

    /**
     * ProductCategory constructor.
     * @param string $productId
     * @param int $categoryOrder
     */
    public function __construct($productId, $categoryOrder)
    {
        $this->productId = $productId;
        $this->categoryOrder = $categoryOrder;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return ProductCategory
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set categoryOrder
     *
     * @param integer $categoryOrder
     *
     * @return ProductCategory
     */
    public function setCategoryOrder($categoryOrder)
    {
        $this->categoryOrder = $categoryOrder;

        return $this;
    }

    /**
     * Get categoryOrder
     *
     * @return int
     */
    public function getCategoryOrder()
    {
        return $this->categoryOrder;
    }
}

