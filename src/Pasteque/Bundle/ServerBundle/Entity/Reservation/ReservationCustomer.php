<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Reservation;

/**
 * ReservationCustomer
 */
class ReservationCustomer
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
    private $customerId;

    /**
     * ReservationCustomer constructor.
     * @param string $customerId
     * @param string $displayId
     */
    public function __construct($customerId, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->customerId = $customerId;
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
     * Set displayId.
     *
     * @param string $displayId
     *
     * @return ReservationCustomer
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
     * Set customerId
     *
     * @param string $customerId
     *
     * @return ReservationCustomer
     */
    public function setCustomerId($customerId)
    {
        $this->customerId = $customerId;

        return $this;
    }

    /**
     * Get customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->customerId;
    }
}

