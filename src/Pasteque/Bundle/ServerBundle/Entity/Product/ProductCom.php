<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Product;

/**
 * ProductCom
 */
class ProductCom
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $productId2;

    /**
     * ProductCom constructor.
     * @param string $productId
     * @param string $productId2
     */
    public function __construct($productId, $productId2)
    {
        $this->id = com_create_guid();
        $this->productId = $productId;
        $this->productId2 = $productId2;
    }

    /**
     * Get id
     *
     * @return string
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
     * @return ProductCom
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
     * Set productId2
     *
     * @param string $productId2
     *
     * @return ProductCom
     */
    public function setProductId2($productId2)
    {
        $this->productId2 = $productId2;

        return $this;
    }

    /**
     * Get productId2
     *
     * @return string
     */
    public function getProductId2()
    {
        return $this->productId2;
    }
}

