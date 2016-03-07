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
 * StockLevel.
 */
class StockLevel
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
     *
     * @param string $productId
     * @param string $locationId
     * @param string $attributeSetInstanceId
     * @param float  $security
     * @param float  $max
     * @param float  $quantity
     * @param string $displayId
     */
    public function __construct($productId, $locationId, $attributeSetInstanceId, $security, $max,
                                $quantity = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->productId = $productId;
        $this->locationId = $locationId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->security = $security;
        $this->max = $max;
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
     * Set displayId.
     *
     * @param string $displayId
     *
     * @return StockLevel
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
     * Set productId.
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
     * Get productId.
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set locationId.
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
     * Get locationId.
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set attributeSetInstanceId.
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
     * Get attributeSetInstanceId.
     *
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * Set security.
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
     * Get security.
     *
     * @return float
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * Set max.
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
     * Get max.
     *
     * @return float
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * Set quantity.
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
     * Get quantity.
     *
     * @return float
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
}
