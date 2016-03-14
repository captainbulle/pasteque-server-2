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

namespace Pasteque\Bundle\ServerBundle\Entity\Payment;

/**
 * Payment.
 */
class Payment
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $displayId;

    /**
     * @var int
     */
    private $pairedPaymentId;

    /**
     * @var int
     */
    private $receiptId;

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
     * @var string
     */
    private $backType;

    /**
     * @var float
     */
    private $backAmount;

    /**
     * @var string
     */
    private $returnMessage;

    /**
     * @var string
     */
    private $pairedWith;

    /**
     * @var string
     */
    private $note;

    /**
     * Payment constructor.
     *
     * @param int    $pairedPaymentId
     * @param int    $receiptId
     * @param string $type
     * @param float  $amount
     * @param int    $currencyId
     * @param float  $currencyAmount
     * @param string $returnMessage
     * @param string $pairedWith
     * @param string $note
     * @param string $backType
     * @param float  $backAmount
     * @param int    $displayId
     */
    public function __construct($pairedPaymentId, $receiptId, $type, $amount, $currencyId, $currencyAmount,
                                $returnMessage, $pairedWith, $note, $backType = null, $backAmount = null,
                                $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->pairedPaymentId = $pairedPaymentId;
        $this->receiptId = $receiptId;
        $this->type = $type;
        $this->amount = $amount;
        $this->currencyId = $currencyId;
        $this->currencyAmount = $currencyAmount;
        $this->backType = $backType;
        $this->backAmount = $backAmount;
        $this->returnMessage = $returnMessage;
        $this->pairedWith = $pairedWith;
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
     * Set displayId.
     *
     * @param int $displayId
     *
     * @return Payment
     */
    public function setDisplayId($displayId)
    {
        $this->displayId = $displayId;

        return $this;
    }

    /**
     * Get displayId.
     *
     * @return int
     */
    public function getDisplayId()
    {
        return $this->displayId;
    }

    /**
     * Set pairedPaymentId.
     *
     * @param int $pairedPaymentId
     *
     * @return Payment
     */
    public function setPairedPaymentId($pairedPaymentId)
    {
        $this->pairedPaymentId = $pairedPaymentId;

        return $this;
    }

    /**
     * Get pairedPaymentId.
     *
     * @return int
     */
    public function getPairedPaymentId()
    {
        return $this->pairedPaymentId;
    }

    /**
     * Set receiptId.
     *
     * @param int $receiptId
     *
     * @return Payment
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
     * Set type.
     *
     * @param string $type
     *
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * @return Payment
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
     * Set backType.
     *
     * @param string $backType
     *
     * @return Payment
     */
    public function setBackType($backType)
    {
        $this->backType = $backType;

        return $this;
    }

    /**
     * Get backType.
     *
     * @return string
     */
    public function getBackType()
    {
        return $this->backType;
    }

    /**
     * Set backAmount.
     *
     * @param float $backAmount
     *
     * @return Payment
     */
    public function setBackAmount($backAmount)
    {
        $this->backAmount = $backAmount;

        return $this;
    }

    /**
     * Get backAmount.
     *
     * @return float
     */
    public function getBackAmount()
    {
        return $this->backAmount;
    }

    /**
     * Set returnMessage.
     *
     * @param string $returnMessage
     *
     * @return Payment
     */
    public function setReturnMessage($returnMessage)
    {
        $this->returnMessage = $returnMessage;

        return $this;
    }

    /**
     * Get returnMessage.
     *
     * @return string
     */
    public function getReturnMessage()
    {
        return $this->returnMessage;
    }

    /**
     * Set pairedWith.
     *
     * @param string $pairedWith
     *
     * @return Payment
     */
    public function setPairedWith($pairedWith)
    {
        $this->pairedWith = $pairedWith;

        return $this;
    }

    /**
     * Get pairedWith.
     *
     * @return string
     */
    public function getPairedWith()
    {
        return $this->pairedWith;
    }

    /**
     * Set note.
     *
     * @param string $note
     *
     * @return Payment
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
