<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Stock;

/**
 * InventoryItem.
 */
class InventoryItem
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $inventoryId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * Useable quantity.
     *
     * @var float
     */
    private $quantity;

    /**
     * Quantity that cannot be sold and is lost.
     *
     * @var float
     */
    private $lostQuantity;

    /**
     * @var float
     */
    private $defectQuantity;

    /**
     * @var float
     */
    private $missingQuantity;

    /**
     * Value of an unit in the inventory, average of full value by quantity.
     *
     * @var float
     */
    private $unitValue;

    /**
     * InventoryItem constructor.
     *
     * @param int    $inventoryId
     * @param string $productId
     * @param string $attributeSetInstanceId
     * @param float  $quantity
     * @param float  $lostQuantity
     * @param float  $defectQuantity
     * @param float  $missingQuantity
     * @param float  $unitValue
     */
    public function __construct($inventoryId, $productId, $attributeSetInstanceId, $quantity, $lostQuantity, $defectQuantity, $missingQuantity, $unitValue)
    {
        $this->inventoryId = $inventoryId;
        $this->productId = $productId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->quantity = $quantity;
        $this->lostQuantity = $lostQuantity;
        $this->defectQuantity = $defectQuantity;
        $this->missingQuantity = $missingQuantity;
        $this->unitValue = $unitValue;
    }

    /**
     * @return float
     */
    public function getTotalQty()
    {
        return $this->quantity + $this->lostQuantity + $this->defectQuantity + $this->missingQuantity;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set inventoryId.
     *
     * @param int $inventoryId
     *
     * @return InventoryItem
     */
    public function setInventoryId($inventoryId)
    {
        $this->inventoryId = $inventoryId;

        return $this;
    }

    /**
     * Get inventoryId.
     *
     * @return int
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * Set productId.
     *
     * @param string $productId
     *
     * @return InventoryItem
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set attributeSetInstanceId.
     *
     * @param string $attributeSetInstanceId
     *
     * @return InventoryItem
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;

        return $this;
    }

    /**
     * Get attributeSetInstanceId.
     *
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * Set quantity.
     *
     * @param float $quantity
     *
     * @return InventoryItem
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * Get quantity.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set lostQuantity.
     *
     * @param float $lostQuantity
     *
     * @return InventoryItem
     */
    public function setLostQuantity($lostQuantity)
    {
        $this->lostQuantity = $lostQuantity;

        return $this;
    }

    /**
     * Get lostQuantity.
     *
     * @return float
     */
    public function getLostQuantity()
    {
        return $this->lostQuantity;
    }

    /**
     * Set defectQuantity.
     *
     * @param float $defectQuantity
     *
     * @return InventoryItem
     */
    public function setDefectQuantity($defectQuantity)
    {
        $this->defectQuantity = $defectQuantity;

        return $this;
    }

    /**
     * Get defectQuantity.
     *
     * @return float
     */
    public function getDefectQuantity()
    {
        return $this->defectQuantity;
    }

    /**
     * Set missingQuantity.
     *
     * @param float $missingQuantity
     *
     * @return InventoryItem
     */
    public function setMissingQuantity($missingQuantity)
    {
        $this->missingQuantity = $missingQuantity;

        return $this;
    }

    /**
     * Get missingQuantity.
     *
     * @return float
     */
    public function getMissingQuantity()
    {
        return $this->missingQuantity;
    }

    /**
     * Set unitValue.
     *
     * @param float $unitValue
     *
     * @return InventoryItem
     */
    public function setUnitValue($unitValue)
    {
        $this->unitValue = $unitValue;

        return $this;
    }

    /**
     * Get unitValue.
     *
     * @return float
     */
    public function getUnitValue()
    {
        return $this->unitValue;
    }
}
