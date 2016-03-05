<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Order;

/**
 * OrderLine
 */
class OrderLine
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var int
     */
    private $line;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $attributeInstanceId;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var string
     */
    private $attributes;

    /**
     * OrderLine constructor.
     * @param string $orderId
     * @param int $line
     * @param string $productId
     * @param string $attributeInstanceId
     * @param float $quantity
     * @param string $attributes
     */
    public function __construct($orderId, $line, $productId, $attributeInstanceId, $quantity, $attributes=null)
    {
        $this->orderId = $orderId;
        $this->line = $line;
        $this->productId = $productId;
        $this->attributeInstanceId = $attributeInstanceId;
        $this->quantity = $quantity;
        $this->attributes = $attributes;
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
     * Set orderId
     *
     * @param string $orderId
     *
     * @return OrderLine
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set line
     *
     * @param integer $line
     *
     * @return OrderLine
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return OrderLine
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
     * Set attributeInstanceId
     *
     * @param string $attributeInstanceId
     *
     * @return OrderLine
     */
    public function setAttributeInstanceId($attributeInstanceId)
    {
        $this->attributeInstanceId = $attributeInstanceId;

        return $this;
    }

    /**
     * Get attributeInstanceId
     *
     * @return string
     */
    public function getAttributeInstanceId()
    {
        return $this->attributeInstanceId;
    }

    /**
     * Set quantity
     *
     * @param float $quantity
     *
     * @return OrderLine
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

    /**
     * Set attributes
     *
     * @param string $attributes
     *
     * @return OrderLine
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}

