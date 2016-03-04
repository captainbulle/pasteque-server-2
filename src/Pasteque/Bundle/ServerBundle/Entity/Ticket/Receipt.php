<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

/**
 * Receipt.
 */
class Receipt
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $cashId;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $attributes;

    /**
     * Receipt constructor.
     *
     * @param int       $cashId
     * @param \DateTime $date
     * @param string    $attributes
     */
    public function __construct($cashId, \DateTime $date, $attributes = null)
    {
        $this->id = com_create_guid();
        $this->cashId = $cashId;
        $this->date = $date;
        $this->attributes = $attributes;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set cashId.
     *
     * @param int $cashId
     *
     * @return Receipt
     */
    public function setCashId($cashId)
    {
        $this->cashId = $cashId;

        return $this;
    }

    /**
     * Get cashId.
     *
     * @return int
     */
    public function getCashId()
    {
        return $this->cashId;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return Receipt
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
     * Set attributes.
     *
     * @param string $attributes
     *
     * @return Receipt
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
