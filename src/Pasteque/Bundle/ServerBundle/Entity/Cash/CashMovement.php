<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Cash;

/**
 * CashMovement
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
     * @var string
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
     * @param string $type
     * @param float $amount
     * @param int $currencyId
     * @param float $currencyAmount
     * @param int $cashId
     * @param string $receiptId
     * @param \DateTime $date
     * @param string $note
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
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
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set amount
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
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     *
     * @return CashMovement
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return int
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set currencyAmount
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
     * Get currencyAmount
     *
     * @return float
     */
    public function getCurrencyAmount()
    {
        return $this->currencyAmount;
    }

    /**
     * Set cashId
     *
     * @param integer $cashId
     *
     * @return CashMovement
     */
    public function setCashId($cashId)
    {
        $this->cashId = $cashId;

        return $this;
    }

    /**
     * Get cashId
     *
     * @return int
     */
    public function getCashId()
    {
        return $this->cashId;
    }

    /**
     * Set receiptId
     *
     * @param string $receiptId
     *
     * @return CashMovement
     */
    public function setReceiptId($receiptId)
    {
        $this->receiptId = $receiptId;

        return $this;
    }

    /**
     * Get receiptId
     *
     * @return string
     */
    public function getReceiptId()
    {
        return $this->receiptId;
    }

    /**
     * Set date
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
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set note
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
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}

