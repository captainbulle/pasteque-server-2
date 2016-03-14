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

namespace Pasteque\Bundle\ServerBundle\Entity\Cash;

/**
 * CashMovement.
 */
class CashMovement
{
    const TYPE_CASHIN = 'cashin';
    const TYPE_CASHOUT = 'cashout';

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $type;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $currencyId;

    /**
     * @var float
     */
    private $currencyAmount;

    /**
     * @var int
     */
    private $cashId;

    /**
     * @var int
     */
    private $receiptId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $note;

    /**
     * CashMovement constructor.
     *
     * @param string    $type
     * @param float     $amount
     * @param int       $currencyId
     * @param float     $currencyAmount
     * @param int       $cashId
     * @param int       $receiptId
     * @param \DateTime $date
     * @param string    $note
     */
    public function __construct($type, $amount, $currencyId, $currencyAmount, $cashId, $receiptId, \DateTime $date, $note)
    {
        $this->type = $type;
        $this->amount = $amount;
        $this->currencyId = $currencyId;
        $this->currencyAmount = $currencyAmount;
        $this->cashId = $cashId;
        $this->receiptId = $receiptId;
        $this->date = $date;
        $this->note = $note;
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
     * Set type.
     *
     * @param string $type
     *
     * @return CashMovement
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount.
     *
     * @param float $amount
     *
     * @return CashMovement
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

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

    /**
     * Set currencyId.
     *
     * @param int $currencyId
     *
     * @return CashMovement
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId.
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyAmount.
     *
     * @param float $currencyAmount
     *
     * @return CashMovement
     */
    public function setCurrencyAmount($currencyAmount)
    {
        $this->currencyAmount = $currencyAmount;

        return $this;
    }

    /**
     * Get currencyAmount.
     *
     * @return float
     */
    public function getCurrencyAmount()
    {
        return $this->currencyAmount;
    }

    /**
     * Set cashId.
     *
     * @param int $cashId
     *
     * @return CashMovement
     */
    public function setCashId($cashId)
    {
        $this->cashId = $cashId;

        return $this;
    }

    /**
     * Get cashId.
     *
     * @return int
     */
    public function getCashId()
    {
        return $this->cashId;
    }

    /**
     * Set receiptId.
     *
     * @param int $receiptId
     *
     * @return CashMovement
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
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return CashMovement
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
     * Set note.
     *
     * @param string $note
     *
     * @return CashMovement
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}
