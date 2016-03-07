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

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

/**
 * SharedTicketLine.
 */
class SharedTicketLine
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
    private $sharedTicketId;

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
    private $taxId;

    /**
     * @var float
     */
    private $quantity;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * @var float
     */
    private $price;

    /**
     * @var string
     */
    private $attributes;

    /**
     * SharedTicketLine constructor.
     *
     * @param string $sharedTicketId
     * @param int    $line
     * @param string $productId
     * @param string $taxId
     * @param float  $quantity
     * @param float  $price
     * @param float  $discountRate
     * @param string $attributes
     * @param string $displayId
     */
    public function __construct($sharedTicketId, $line, $productId, $taxId, $quantity, $price, 
                                $discountRate = 0.0, $attributes = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->sharedTicketId = $sharedTicketId;
        $this->line = $line;
        $this->productId = $productId;
        $this->taxId = $taxId;
        $this->quantity = $quantity;
        $this->price = $price;
        $this->discountRate = $discountRate;
        $this->attributes = $attributes;
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
     * @return SharedTicketLine
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
     * Set sharedTicketId.
     *
     * @param string $sharedTicketId
     *
     * @return SharedTicketLine
     */
    public function setSharedTicketId($sharedTicketId)
    {
        $this->sharedTicketId = $sharedTicketId;

        return $this;
    }

    /**
     * Get sharedTicketId.
     *
     * @return string
     */
    public function getSharedTicketId()
    {
        return $this->sharedTicketId;
    }

    /**
     * Set line.
     *
     * @param int $line
     *
     * @return SharedTicketLine
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line.
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set productId.
     *
     * @param string $productId
     *
     * @return SharedTicketLine
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
     * Set taxId.
     *
     * @param string $taxId
     *
     * @return SharedTicketLine
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId.
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set quantity.
     *
     * @param float $quantity
     *
     * @return SharedTicketLine
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
     * Set discountRate.
     *
     * @param float $discountRate
     *
     * @return SharedTicketLine
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set price.
     *
     * @param float $price
     *
     * @return SharedTicketLine
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

    /**
     * Set attributes.
     *
     * @param string $attributes
     *
     * @return SharedTicketLine
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
