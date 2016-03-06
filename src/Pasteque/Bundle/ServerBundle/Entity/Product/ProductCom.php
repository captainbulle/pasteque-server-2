<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Product;

/**
 * ProductCom
 */
class ProductCom
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $displayId;

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
     * @param string $displayId
     */
    public function __construct($productId, $productId2, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->productId = $productId;
        $this->productId2 = $productId2;
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
     * Set displayId.
     *
     * @param string $displayId
     *
     * @return ProductCom
     */
    public function setDisplayId($displayId)
    {
        $this->displayId = $displayId;

        return $this;
    }

    /**
     * Get displayId.
     *
     * @return string
     */
    public function getDisplayId()
    {
        return $this->displayId;
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

