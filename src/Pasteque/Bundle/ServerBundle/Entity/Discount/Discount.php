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

namespace Pasteque\Bundle\ServerBundle\Entity\Discount;

/**
 * Discount.
 */
class Discount
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var int
     */
    private $barcodeType;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * Discount constructor.
     *
     * @param string    $name
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param float     $rate
     * @param string    $barcode
     * @param int       $barcodeType
     * @param int       $displayOrder
     */
    public function __construct($name, \DateTime $startDate, \DateTime $endDate, $rate, $barcode, $barcodeType, $displayOrder = 0)
    {
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->rate = $rate;
        $this->barcode = $barcode;
        $this->barcodeType = $barcodeType;
        $this->displayOrder = $displayOrder;
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
     * Set name.
     *
     * @param string $name
     *
     * @return Discount
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set startDate.
     *
     * @param \DateTime $startDate
     *
     * @return Discount
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate.
     *
     * @param \DateTime $endDate
     *
     * @return Discount
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate.
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set rate.
     *
     * @param float $rate
     *
     * @return Discount
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set barcode.
     *
     * @param string $barcode
     *
     * @return Discount
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode.
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set barcodeType.
     *
     * @param int $barcodeType
     *
     * @return Discount
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;

        return $this;
    }

    /**
     * Get barcodeType.
     *
     * @return int
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return Discount
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }
}
