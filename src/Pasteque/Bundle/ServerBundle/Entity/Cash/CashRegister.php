<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Cash;

/**
 * CashRegister
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
     * @var string
     */
    private $locationId;

    /**
     * @var int
     */
    private $nextTicketId;

    /**
     * CashRegister constructor.
     * @param string $name
     * @param string $locationId
     * @param int $nextTicketId
     */
    public function __construct($name, $locationId, $nextTicketId=1)
    {
        $this->name = $name;
        $this->locationId = $locationId;
        $this->nextTicketId = $nextTicketId;
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
     * Set name
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set locationId
     *
     * @param string $locationId
     *
     * @return CashRegister
     */
    public function setLocationId($locationId)
    {
        $this->locationId = $locationId;

        return $this;
    }

    /**
     * Get locationId
     *
     * @return string
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Set nextTicketId
     *
     * @param integer $nextTicketId
     *
     * @return CashRegister
     */
    public function setNextTicketId($nextTicketId)
    {
        $this->nextTicketId = $nextTicketId;

        return $this;
    }

    /**
     * Get nextTicketId
     *
     * @return int
     */
    public function getNextTicketId()
    {
        return $this->nextTicketId;
    }
}

