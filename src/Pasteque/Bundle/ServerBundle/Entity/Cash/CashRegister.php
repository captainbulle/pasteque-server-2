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
 * CashRegister.
 */
class CashRegister
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $locationId;

    /**
     * @var int
     */
    private $nextTicketId;

    /**
     * CashRegister constructor.
     *
     * @param string $name
     * @param int    $locationId
     * @param int    $nextTicketId
     */
    public function __construct($name, $locationId, $nextTicketId = 1)
    {
        $this->name = $name;
        $this->locationId = $locationId;
        $this->nextTicketId = $nextTicketId;
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
     * Set name.
     *
     * @param string $name
     *
     * @return CashRegister
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
     * Set locationId.
     *
     * @param int $locationId
     *
     * @return CashRegister
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId.
     *
     * @return int
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set nextTicketId.
     *
     * @param int $nextTicketId
     *
     * @return CashRegister
     */
    public function setNextTicketId($nextTicketId)
    {
        $this->nextTicketId = $nextTicketId;

        return $this;
    }

    /**
     * Get nextTicketId.
     *
     * @return int
     */
    public function getNextTicketId()
    {
        return $this->nextTicketId;
    }
}
