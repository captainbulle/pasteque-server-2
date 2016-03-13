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
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $locationId;

    /**
     * @var int
     */
    private $attributeSetInstanceId;

    /**
     * @var float
     */
    private $security;

    /**
     * @var float
     */
    private $maximum;

    /**
     * @var float
     */
    private $quantity;

    /**
     * StockLevel constructor.
     * As quantities are set through stock moves leave $quantity to null to create security and max levels.
     * In that case also set $attributeSetInstanceId to null as it is ignored.
     *
     * @param int $productId
     * @param int $locationId
     * @param int $attributeSetInstanceId
     * @param float  $security
     * @param float  $maximum
     * @param float  $quantity
     * @param string $displayId
     */
    public function __construct($productId, $locationId, $attributeSetInstanceId, $security, $maximum,
                                $quantity = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->productId = $productId;
        $this->locationId = $locationId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->security = $security;
        $this->maximum = $maximum;
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
     * @param int $productId
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
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set locationId.
     *
     * @param int $locationId
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
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set attributeSetInstanceId.
     *
     * @param int $attributeSetInstanceId
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
     * @return int
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
     * Set maximum.
     *
     * @param float $maximum
     *
     * @return StockLevel
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * Get maximum.
     *
     * @return float
     */
    public function getMaximum()
    {
        return $this->maximum;
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
