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

/**
 * StockCurrent.
 */
class StockCurrent
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $locationId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $attributeSetInstanceId;

    /**
     * @var float
     */
    private $quantity;

    /**
     * StockCurrent constructor.
     *
     * @param int   $locationId
     * @param int   $productId
     * @param int   $attributeSetInstanceId
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
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set locationId.
     *
     * @param int $locationId
     *
     * @return StockCurrent
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

    /**
     * Set productId.
     *
     * @param int $productId
     *
     * @return StockCurrent
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set attributeSetInstanceId.
     *
     * @param int $attributeSetInstanceId
     *
     * @return StockCurrent
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;

        return $this;
    }

    /**
     * Get attributeSetInstanceId.
     *
     * @return int
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
     * @return StockCurrent
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
}
