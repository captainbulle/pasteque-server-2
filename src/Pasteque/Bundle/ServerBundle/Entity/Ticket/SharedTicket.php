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

/**
 * SharedTicket.
 */
class SharedTicket
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
    private $name;

    /**
     * @var int
     */
    private $customerId;

    /**
     * @var int
     */
    private $customerCount;

    /**
     * @var int
     */
    private $tariffAreaId;

    /**
     * @var int
     */
    private $discountProfileId;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * @var SharedTicketLine[]
     */
    private $sharedTicketLines;

    /**
     * SharedTicket constructor.
     *
     * @param string $name
     * @param int $customerId
     * @param int    $customerCount
     * @param int    $tariffAreaId
     * @param int    $discountProfileId
     * @param float  $discountRate
     * @param string $displayId
     */
    public function __construct($name, $customerId, $customerCount, $tariffAreaId, $discountProfileId,
                                $discountRate = 0.0, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->customerId = $customerId;
        $this->customerCount = $customerCount;
        $this->tariffAreaId = $tariffAreaId;
        $this->discountProfileId = $discountProfileId;
        $this->discountRate = $discountRate;
        $this->sharedTicketLines = array();
    }

    /**
     * @param SharedTicketLine $sharedTicketLine
     */
    public function addSharedTicketLine($sharedTicketLine)
    {
        array_push($this->sharedTicketLines, $sharedTicketLine);
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
     * @return SharedTicket
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
     * Set name.
     *
     * @param string $name
     *
     * @return SharedTicket
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set customerId.
     *
     * @param int $customerId
     *
     * @return SharedTicket
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
     * Set customerCount.
     *
     * @param int $customerCount
     *
     * @return SharedTicket
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
     * Set tariffAreaId.
     *
     * @param int $tariffAreaId
     *
     * @return SharedTicket
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
     * Set discountProfileId.
     *
     * @param int $discountProfileId
     *
     * @return SharedTicket
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

    /**
     * Set discountRate.
     *
     * @param float $discountRate
     *
     * @return SharedTicket
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
}
