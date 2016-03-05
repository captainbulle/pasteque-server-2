<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Stock;

/**
 * StockCurrent
 */
class StockCurrent
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * @var float
     */
    private $quantity;

    /**
     * StockCurrent constructor.
     * @param string $locationId
     * @param string $productId
     * @param string $attributeSetInstanceId
     * @param float $quantity
     */
    public function __construct($locationId, $productId, $attributeSetInstanceId, $quantity)
    {
        $this->locationId = $locationId;
        $this->productId = $productId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->quantity = $quantity;
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
     * Set locationId
     *
     * @param string $locationId
     *
     * @return StockCurrent
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
     * Set productId
     *
     * @param string $productId
     *
     * @return StockCurrent
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
     * Set attributeSetInstanceId
     *
     * @param string $attributeSetInstanceId
     *
     * @return StockCurrent
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
     * Set quantity
     *
     * @param float $quantity
     *
     * @return StockCurrent
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

