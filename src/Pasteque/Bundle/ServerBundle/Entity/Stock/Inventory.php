<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Stock;

use Pasteque\Bundle\ServerBundle\Entity\Product\Product as Product;

/**
 * Inventory
 * Snapshot of a stock at a given date.
 */
class Inventory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $locationId;

    /**
     * @var InventoryItem[]
     */
    private $inventoryItems;

    /**
     * @param InventoryItem $inventoryItem
     */
    public function addInventoryItem($inventoryItem)
    {
        array_push($inventoryItems, $inventoryItem);
    }

    /**
     * Add 0 quantities to all on sales and missing products in inventory.
     *
     * @param Product[] $products
     */
    public function fillZero($products)
    {
        foreach ($this->inventoryItems as $inventoryItem) {
            foreach ($products as $i => $product) {
                if ($product->getId() == $inventoryItem->getProductId()) {
                    array_splice($products, $i, 1);
                    break;
                }
            }
        }
        // Registered products removed, add 0 items
        foreach ($products as $product) {
            $this->addInventoryItem(new InventoryItem($this->id, $product->getId(), null, 0, 0, 0, null, null));
        }
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Inventory
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set locationId.
     *
     * @param string $locationId
     *
     * @return Inventory
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId.
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}
