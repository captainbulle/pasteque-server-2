<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Payment;

/**
 * PaymentModeReturn
 */
class PaymentModeReturn
{
    const PARENT_ID = 'parent';

    /**
     * @var int
     */
    private $id;

    /**
     * In which PaymentMode the exceedent is given back. May be null. When creating a new PaymentMode,
     * use the special value PARENT_ID to reference the not currently set PaymentMode id.
     * @var int
     */
    private $paymentModeId;

    /**
     * @var int
     */
    private $returnModeId;

    /**
     * @var float
     */
    private $min;

    /**
     * PaymentModeReturn constructor.
     * @param int $paymentModeId
     * @param float $min
     * @param int $returnModeId
     */
    public function __construct($paymentModeId, $min, $returnModeId=null)
    {
        $this->paymentModeId = $paymentModeId;
        $this->min = $min;
        $this->returnModeId = $returnModeId;
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
     * Set paymentModeId
     *
     * @param integer $paymentModeId
     *
     * @return PaymentModeReturn
     */
    public function setPaymentModeId($paymentModeId)
    {
        $this->paymentModeId = $paymentModeId;

        return $this;
    }

    /**
     * Get paymentModeId
     *
     * @return int
     */
    public function getPaymentModeId()
    {
        return $this->paymentModeId;
    }

    /**
     * Set returnModeId
     *
     * @param integer $returnModeId
     *
     * @return PaymentModeReturn
     */
    public function setReturnModeId($returnModeId)
    {
        $this->returnModeId = $returnModeId;

        return $this;
    }

    /**
     * Get returnModeId
     *
     * @return int
     */
    public function getReturnModeId()
    {
        return $this->returnModeId;
    }

    /**
     * Set min
     *
     * @param float $min
     *
     * @return PaymentModeReturn
     */
    public function setMin($min)
    {
        $this->min = $min;

        return $this;
    }

    /**
     * Get min
     *
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }
}

