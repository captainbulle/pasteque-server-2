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
 * StockMove.
 */
class StockMove
{
    const REASON_IN_BUY = 1;
    const REASON_IN_REFUND = 2;
    const REASON_IN_MOVEMENT = 4;
    const REASON_OUT_SELL = -1;
    const REASON_OUT_REFUND = -2;
    const REASON_OUT_BACK = -3;
    const REASON_OUT_MOVEMENT = -4;
    const REASON_TRANSFERT = 1000;
    const REASON_RESET = 0;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $displayId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $reason;

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
     * @var float
     */
    private $price;

    /**
     * StockMove constructor.
     *
     * @param \DateTime $date
     * @param int       $reason
     * @param string    $locationId
     * @param string    $productId
     * @param string    $attributeSetInstanceId
     * @param float     $quantity
     * @param float     $price
     * @param string    $displayId
     */
    public function __construct(\DateTime $date, $reason, $locationId, $productId, $attributeSetInstanceId,
                                $quantity, $price, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->date = $date;
        $this->reason = $reason;
        $this->locationId = $locationId;
        $this->productId = $productId;
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    /**
     * Check if the move is in or out.
     *
     * @param int $reason
     *
     * @return bool
     */
    public function isIn($reason)
    {
        return $reason >= 0;
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
     * @return StockMove
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return StockMove
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
     * Set reason.
     *
     * @param int $reason
     *
     * @return StockMove
     */
    public function setReason($reason)
    {
        $this->reason = $reason;

        return $this;
    }

    /**
     * Get reason.
     *
     * @return int
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * Set locationId.
     *
     * @param string $locationId
     *
     * @return StockMove
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
     * Set productId.
     *
     * @param string $productId
     *
     * @return StockMove
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
     * @return StockMove
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
     * @return StockMove
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
     * Set price.
     *
     * @param float $price
     *
     * @return StockMove
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price.
     *
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }
}
