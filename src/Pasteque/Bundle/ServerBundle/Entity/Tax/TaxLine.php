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

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxLine.
 */
class TaxLine
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
    private $receiptId;

    /**
     * @var int
     */
    private $taxId;

    /**
     * @var float
     */
    private $base;

    /**
     * @var float
     */
    private $amount;

    /**
     * TaxLine constructor.
     *
     * @param int    $receiptId
     * @param int    $taxId
     * @param float  $base
     * @param string $displayId
     */
    public function __construct($receiptId, $taxId, $base, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->receiptId = $receiptId;
        $this->taxId = $taxId;
        $this->base = $base;
        $this->amount = 0.0;
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
     * @return TaxLine
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
     * Set receiptId.
     *
     * @param int $receiptId
     *
     * @return TaxLine
     */
    public function setReceiptId($receiptId)
    {
        $this->receiptId = $receiptId;

        return $this;
    }

    /**
     * Get receiptId.
     *
     * @return int
     */
    public function getReceiptId()
    {
        return $this->receiptId;
    }

    /**
     * Set taxId.
     *
     * @param int $taxId
     *
     * @return TaxLine
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId.
     *
     * @return int
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set base.
     *
     * @param float $base
     *
     * @return TaxLine
     */
    public function setBase($base)
    {
        $this->base = $base;

        return $this;
    }

    /**
     * Get base.
     *
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set amount.
     *
     * @param Tax $tax
     *
     * @return TaxLine
     */
    public function setAmount(Tax $tax)
    {
        $this->amount = $this->base * $tax->getRate();

        return $this;
    }

    /**
     * Get amount.
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}
