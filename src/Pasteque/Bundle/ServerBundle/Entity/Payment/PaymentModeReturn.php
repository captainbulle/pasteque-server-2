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
 * PaymentModeReturn.
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
     *
     * @var int
     */
    private $paymentModeId;

    /**
     * @var int
     */
    private $paymentReturnModeId;

    /**
     * @var float
     */
    private $min;

    /**
     * PaymentModeReturn constructor.
     *
     * @param int   $paymentModeId
     * @param float $min
     * @param int   $paymentReturnModeId
     */
    public function __construct($paymentModeId, $min, $paymentReturnModeId = null)
    {
        $this->paymentModeId = $paymentModeId;
        $this->min = $min;
        $this->paymentReturnModeId = $paymentReturnModeId;
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
     * @return PaymentModeReturn
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
     * Set paymentReturnModeId.
     *
     * @param int $paymentReturnModeId
     *
     * @return PaymentModeReturn
     */
    public function setPaymentReturnModeId($paymentReturnModeId)
    {
        $this->paymentReturnModeId = $paymentReturnModeId;

        return $this;
    }

    /**
     * Get paymentReturnModeId.
     *
     * @return int
     */
    public function getPaymentReturnModeId()
    {
        return $this->paymentReturnModeId;
    }

    /**
     * Set min.
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
     * Get min.
     *
     * @return float
     */
    public function getMin()
    {
        return $this->min;
    }
}
