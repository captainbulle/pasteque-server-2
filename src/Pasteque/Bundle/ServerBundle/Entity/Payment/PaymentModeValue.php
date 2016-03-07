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
