<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Reservation;

/**
 * ReservationCustomer
 */
class ReservationCustomer
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $customerId;

    /**
     * ReservationCustomer constructor.
     * @param string $customerId
     */
    public function __construct($customerId)
    {
        $this->id = com_create_guid();
        $this->customerId = $customerId;
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

