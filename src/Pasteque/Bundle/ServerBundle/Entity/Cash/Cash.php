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

namespace Pasteque\Bundle\ServerBundle\Entity\Cash;

/**
 * Cash.
 */
class Cash
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $money;

    /**
     * @var int
     */
    private $cashRegisterId;

    /**
     * @var int
     */
    private $hostSequence;

    /**
     * @var \DateTime
     */
    private $openDate; // DateStart in database

    /**
     * @var \DateTime
     */
    private $closeDate; // DateEnd in database

    /**
     * @var float
     */
    private $openCash;

    /**
     * @var float
     */
    private $closeCash;

    /**
     * @var float
     */
    private $expectedCash;

    /** Optionnal tickets count */
    //private $tickets;
    /** Optionnal total */
    //private $total;

    /**
     * ClosedCash constructor.
     *
     * @param string    $money
     * @param int       $cashRegisterId
     * @param int       $hostSequence
     * @param \DateTime $openDate
     * @param \DateTime $closeDate
     * @param float     $openCash
     * @param float     $closeCash
     * @param float     $expectedCash
     */
    public function __construct($money, $cashRegisterId, $hostSequence, \DateTime $openDate, \DateTime $closeDate, $openCash, $closeCash, $expectedCash)
    {
        $this->money = $money;
        $this->cashRegisterId = $cashRegisterId;
        $this->hostSequence = $hostSequence;
        $this->openDate = $openDate;
        $this->closeDate = $closeDate;
        $this->openCash = $openCash;
        $this->closeCash = $closeCash;
        $this->expectedCash = $expectedCash;
    }

    /**
     * @return bool
     */
    public function isClosed()
    {
        return $this->closeDate != null;
    }

    /**
     * @return bool
     */
    public function isOpened()
    {
        return $this->openDate != null;
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
     * Set money.
     *
     * @param string $money
     *
     * @return Cash
     */
    public function setMoney($money)
    {
        $this->money = $money;

        return $this;
    }

    /**
     * Get money.
     *
     * @return string
     */
    public function getMoney()
    {
        return $this->money;
    }

    /**
     * Set cashRegisterId.
     *
     * @param int $cashRegisterId
     *
     * @return Cash
     */
    public function setCashRegisterId($cashRegisterId)
    {
        $this->cashRegisterId = $cashRegisterId;

        return $this;
    }

    /**
     * Get cashRegisterId.
     *
     * @return int
     */
    public function getCashRegisterId()
    {
        return $this->cashRegisterId;
    }

    /**
     * Set hostSequence.
     *
     * @param int $hostSequence
     *
     * @return Cash
     */
    public function setHostSequence($hostSequence)
    {
        $this->hostSequence = $hostSequence;

        return $this;
    }

    /**
     * Get hostSequence.
     *
     * @return int
     */
    public function getHostSequence()
    {
        return $this->hostSequence;
    }

    /**
     * Set openDate.
     *
     * @param \DateTime $openDate
     *
     * @return Cash
     */
    public function setOpenDate($openDate)
    {
        $this->openDate = $openDate;

        return $this;
    }

    /**
     * Get openDate.
     *
     * @return \DateTime
     */
    public function getOpenDate()
    {
        return $this->openDate;
    }

    /**
     * Set closeDate.
     *
     * @param \DateTime $closeDate
     *
     * @return Cash
     */
    public function setCloseDate($closeDate)
    {
        $this->closeDate = $closeDate;

        return $this;
    }

    /**
     * Get closeDate.
     *
     * @return \DateTime
     */
    public function getCloseDate()
    {
        return $this->closeDate;
    }

    /**
     * Set openCash.
     *
     * @param float $openCash
     *
     * @return Cash
     */
    public function setOpenCash($openCash)
    {
        $this->openCash = $openCash;

        return $this;
    }

    /**
     * Get openCash.
     *
     * @return float
     */
    public function getOpenCash()
    {
        return $this->openCash;
    }

    /**
     * Set closeCash.
     *
     * @param float $closeCash
     *
     * @return Cash
     */
    public function setCloseCash($closeCash)
    {
        $this->closeCash = $closeCash;

        return $this;
    }

    /**
     * Get closeCash.
     *
     * @return float
     */
    public function getCloseCash()
    {
        return $this->closeCash;
    }

    /**
     * Set expectedCash.
     *
     * @param float $expectedCash
     *
     * @return Cash
     */
    public function setExpectedCash($expectedCash)
    {
        $this->expectedCash = $expectedCash;

        return $this;
    }

    /**
     * Get expectedCash.
     *
     * @return float
     */
    public function getExpectedCash()
    {
        return $this->expectedCash;
    }
}
