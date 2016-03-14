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

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

use Pasteque\Bundle\ServerBundle\Entity\Tax\TaxLine as TaxLine;

/**
 * Ticket.
 */
class Ticket
{
    /** Sale ticket type */
    const TYPE_SELL = 0;
    /** Refund ticket type */
    const TYPE_REFUND = 1;
    /** Debt recovery ticket type */
    const TYPE_PAYMENT = 2;

    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $type;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var int
     */
    private $receiptId;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $tariffAreaId;

    /**
     * @var int
     */
    private $status;

    /**
     * @var int
     */
    private $customerCount;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * @var int
     */
    private $discountProfileId;

    /**
     * @var TicketLine[]
     */
    private $ticketLines;

    /**
     * Ticket constructor.
     *
     * @param int       $type
     * @param \DateTime $date
     * @param int       $status
     * @param int       $receiptId
     * @param int       $userId
     * @param int       $customerId
     * @param int       $tariffAreaId
     * @param int       $customerCount
     * @param float     $discountRate
     * @param int       $discountProfileId
     */
    public function __construct($type, \DateTime $date, $status, $receiptId, $userId, $customerId = null, $tariffAreaId = null, $customerCount = null, $discountRate = 0.0, $discountProfileId = null)
    {
        $this->type = $type;
        $this->date = $date;
        $this->status = $status;
        $this->receiptId = $receiptId;
        $this->userId = $userId;
        $this->customerId = $customerId;
        $this->tariffAreaId = $tariffAreaId;
        $this->customerCount = $customerCount;
        $this->discountRate = $discountRate;
        $this->discountProfileId = $discountProfileId;
        $this->ticketLines = array();
    }

    /**
     * @return TaxLine[]
     */
    public function getTaxLines()
    {
        $amounts = array();
        foreach ($this->ticketLines as $ticketLine) {
            if (isset($amounts[$ticketLine->getTaxId()])) {
                $amounts[$ticketLine->getTaxId()] += $ticketLine->getSubtotal($this->discountRate);
            } else {
                $amounts[$ticketLine->getTaxId()] = $ticketLine->getSubtotal($this->discountRate);
            }
        }
        /*
         * @var TaxLine[]
         */
        $taxLines = array();
        foreach ($amounts as $taxId => $base) {
            array_push($taxLines, new TaxLine($this->receiptId, $taxId, $base));
        }

        return $taxLines;
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
     * @param int $type
     *
     * @return Ticket
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type.
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Ticket
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
     * Set receiptId.
     *
     * @param int $receiptId
     *
     * @return Ticket
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
     * Set userId.
     *
     * @param int $userId
     *
     * @return Ticket
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId.
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return Ticket
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId.
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }

    /**
     * Set tariffAreaId.
     *
     * @param int $tariffAreaId
     *
     * @return Ticket
     */
    public function setTariffAreaId($tariffAreaId)
    {
        $this->tariffAreaId = $tariffAreaId;

        return $this;
    }

    /**
     * Get tariffAreaId.
     *
     * @return int
     */
    public function getTariffAreaId()
    {
        return $this->tariffAreaId;
    }

    /**
     * Set status.
     *
     * @param int $status
     *
     * @return Ticket
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set customerCount.
     *
     * @param int $customerCount
     *
     * @return Ticket
     */
    public function setCustomerCount($customerCount)
    {
        $this->customerCount = $customerCount;

        return $this;
    }

    /**
     * Get customerCount.
     *
     * @return int
     */
    public function getCustomerCount()
    {
        return $this->customerCount;
    }

    /**
     * Set discountRate.
     *
     * @param float $discountRate
     *
     * @return Ticket
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set discountProfileId.
     *
     * @param int $discountProfileId
     *
     * @return Ticket
     */
    public function setDiscountProfileId($discountProfileId)
    {
        $this->discountProfileId = $discountProfileId;

        return $this;
    }

    /**
     * Get discountProfileId.
     *
     * @return int
     */
    public function getDiscountProfileId()
    {
        return $this->discountProfileId;
    }
}
