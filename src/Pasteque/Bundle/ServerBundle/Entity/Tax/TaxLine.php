<?php

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
     *
     * @param string $receiptId
     * @param string $taxId
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
     * Get receiptId.
     *
     * @return string
     */
    public function getReceiptId()
    {
        return $this->receiptId;
    }

    /**
     * Set taxId.
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
     * Get taxId.
     *
     * @return string
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
