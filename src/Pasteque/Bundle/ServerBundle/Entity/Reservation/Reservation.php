<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Reservation;

/**
 * Reservation
 */
class Reservation
{
    /**
     * @var string
     */
    private $id;

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
     * @param string $name
     * @param int $chairs
     * @param bool $isDone
     * @param string $description
     */
    public function __construct($name, $chairs, $isDone, $description=null)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->chairs = $chairs;
        $this->isDone = $isDone;
        $this->description = $description;
        $this->addedDate = new DateTime();
        $this->updatedDate = null;
    }


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set addedDate
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
     * Get addedDate
     *
     * @return \DateTime
     */
    public function getAddedDate()
    {
        return $this->addedDate;
    }

    /**
     * Set updatedDate
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
     * Get updatedDate
     *
     * @return \DateTime
     */
    public function getUpdatedDate()
    {
        return $this->updatedDate;
    }

    /**
     * Set name
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set chairs
     *
     * @param integer $chairs
     *
     * @return Reservation
     */
    public function setChairs($chairs)
    {
        $this->chairs = $chairs;

        return $this;
    }

    /**
     * Get chairs
     *
     * @return int
     */
    public function getChairs()
    {
        return $this->chairs;
    }

    /**
     * Set isDone
     *
     * @param boolean $isDone
     *
     * @return Reservation
     */
    public function setIsDone($isDone)
    {
        $this->isDone = $isDone;

        return $this;
    }

    /**
     * Get isDone
     *
     * @return bool
     */
    public function getIsDone()
    {
        return $this->isDone;
    }

    /**
     * Set description
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
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
