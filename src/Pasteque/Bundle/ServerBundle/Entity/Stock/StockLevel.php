<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Stock;

/**
 * StockLevel
 */
class StockLevel
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
    private $locationId;

    /**
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * @var float
     */
    private $security;

    /**
     * @var float
     */
    private $max;

    /**
     * @var float
     */
    private $quantity;

    /**
     * StockLevel constructor.
     * As quantities are set through stock moves leave $quantity to null to create security and max levels.
     * In that case also set $attributeSetInstanceId to null as it is ignored.
     * @param string $productId
     * @param string $locationId
     * @param string $attributeSetInstanceId
     * @param float $security
     * @param float $max
     * @param float $quantity
     */
    public function __construct($productId, $locationId, $attributeSetInstanceId, $security, $max, $quantity=null)
    {
        $this->productId = $productId;
        $this->locationId = $locationId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->security = $security;
        $this->max = $max;
        $this->quantity = $quantity;
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
     * @return StockLevel
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
     * Set locationId
     *
     * @param string $locationId
     *
     * @return StockLevel
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set attributeSetInstanceId
     *
     * @param string $attributeSetInstanceId
     *
     * @return StockLevel
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;

        return $this;
    }

    /**
     * Get attributeSetInstanceId
     *
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * Set security
     *
     * @param float $security
     *
     * @return StockLevel
     */
    public function setSecurity($security)
    {
        $this->security = $security;

        return $this;
    }

    /**
     * Get security
     *
     * @return float
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set max
     *
     * @param float $max
     *
     * @return StockLevel
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * Get max
     *
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return StockLevel
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}

