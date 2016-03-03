<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxLine
 */
class TaxLine
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $receiptId;

    /**
     * @var string
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
     * @param string $receiptId
     * @param string $taxId
     * @param float $base
     */
    public function __construct($receiptId, $taxId, $base)
    {
        $this->id = com_create_guid();
        $this->receiptId = $receiptId;
        $this->taxId = $taxId;
        $this->base = $base;
        $this->amount = 0.0;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set receiptId
     *
     * @param string $receiptId
     *
     * @return TaxLine
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
     * Set taxId
     *
     * @param string $taxId
     *
     * @return TaxLine
     */
    public function setTaxId($taxId)
    {
        $this->taxId = $taxId;

        return $this;
    }

    /**
     * Get taxId
     *
     * @return string
     */
    public function getTaxId()
    {
        return $this->taxId;
    }

    /**
     * Set base
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
     * Get base
     *
     * @return float
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * Set amount
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
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }
}

