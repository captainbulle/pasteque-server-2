<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Payment;

/**
 * PaymentModeValue
 * Predefined values to pick for PaymentModes.
 */
class PaymentModeValue
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $paymentModeId;

    /**
     * @var float
     */
    private $value;

    /**
     * @var string
     */
    private $resource;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * PaymentModeValue constructor.
     *
     * @param int    $paymentModeId
     * @param float  $value
     * @param string $resource
     * @param int    $displayOrder
     */
    public function __construct($paymentModeId, $value, $resource = null, $displayOrder = 0)
    {
        $this->paymentModeId = $paymentModeId;
        $this->value = $value;
        $this->resource = $resource;
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
     * Set paymentModeId.
     *
     * @param int $paymentModeId
     *
     * @return PaymentModeValue
     */
    public function setPaymentModeId($paymentModeId)
    {
        $this->paymentModeId = $paymentModeId;

        return $this;
    }

    /**
     * Get paymentModeId.
     *
     * @return int
     */
    public function getPaymentModeId()
    {
        return $this->paymentModeId;
    }

    /**
     * Set value.
     *
     * @param float $value
     *
     * @return PaymentModeValue
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return float
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set resource.
     *
     * @param string $resource
     *
     * @return PaymentModeValue
     */
    public function setResource($resource)
    {
        $this->resource = $resource;

        return $this;
    }

    /**
     * Get resource.
     *
     * @return string
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return PaymentModeValue
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
