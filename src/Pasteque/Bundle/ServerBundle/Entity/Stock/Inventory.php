<?php
//    POS-Tech API
//
//    Copyright (C) 2012 Scil (http://scil.coop)
//
//    This file is part of POS-Tech.
//
//    POS-Tech is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    POS-Tech is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with POS-Tech.  If not, see <http://www.gnu.org/licenses/>.

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
     * @var int
     */
    private $locationId;

    /**
     * @var InventoryItem[]
     */
    private $inventoryItems;

    /**
     * Inventory constructor.
     *
     * @param \DateTime $date
     * @param int       $locationId
     */
    public function __construct(\DateTime $date, $locationId)
    {
        $this->date = $date;
        $this->locationId = $locationId;
        $this->inventoryItems = array();
    }

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
     * @param int $locationId
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
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }
}
