<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Ticket;

/**
 * Receipt.
 */
class Receipt
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
     * @param string    $displayId
     */
    public function __construct($cashId, \DateTime $date, $attributes = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->cashId = $cashId;
        $this->date = $date;
        $this->attributes = $attributes;
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
     * @return Receipt
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
