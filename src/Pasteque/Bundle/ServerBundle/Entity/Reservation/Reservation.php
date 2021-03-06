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

namespace Pasteque\Bundle\ServerBundle\Entity\Reservation;

/**
 * Reservation.
 */
class Reservation
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
     * @var \DateTime
     */
    private $addedDate;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $chairs;

    /**
     * @var bool
     */
    private $isDone;

    /**
     * @var string
     */
    private $description;

    /**
     * Reservation constructor.
     *
     * @param string $name
     * @param int    $chairs
     * @param bool   $isDone
     * @param string $description
     * @param string $displayId
     */
    public function __construct($name, $chairs, $isDone, $description = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->chairs = $chairs;
        $this->isDone = $isDone;
        $this->description = $description;
        $this->addedDate = new DateTime();
        $this->updatedDate = null;
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
     * @return Reservation
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
     * Set addedDate.
     *
     * @param \DateTime $addedDate
     *
     * @return Reservation
     */
    public function setAddedDate($addedDate)
    {
        $this->addedDate = $addedDate;

        return $this;
    }

    /**
     * Get addedDate.
     *
     * @return \DateTime
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set updatedDate.
     *
     * @param \DateTime $updatedDate
     *
     * @return Reservation
     */
    public function setUpdatedDate($updatedDate)
    {
        $this->updatedDate = $updatedDate;

        return $this;
    }

    /**
     * Get updatedDate.
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Reservation
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
     * Set chairs.
     *
     * @param int $chairs
     *
     * @return Reservation
     */
    public function setChairs($chairs)
    {
        $this->chairs = $chairs;

        return $this;
    }

    /**
     * Get chairs.
     *
     * @return int
     */
    public function getChairs()
    {
        return $this->chairs;
    }

    /**
     * Set isDone.
     *
     * @param bool $isDone
     *
     * @return Reservation
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone.
     *
     * @return bool
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return Reservation
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
