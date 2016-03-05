<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Order;

/**
 * Order
 */
class Order
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var int
     */
    private $type;

    /**
     * @var int
     */
    private $userId;

    /**
     * @var string
     */
    private $customerId;

    /**
     * @var int
     */
    private $status;

    /**
     * @var string
     */
    private $note;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * Order constructor.
     * @param int $type
     * @param int $userId
     * @param string $customerId
     * @param int $status
     * @param \DateTime $date
     * @param string $note
     */
    public function __construct($type, $userId, $customerId, $status, \DateTime $date, $note=null)
    {
        $this->id = com_create_guid();
        $this->type = $type;
        $this->userId = $userId;
        $this->customerId = $customerId;
        $this->status = $status;
        $this->date = $date;
        $this->note = $note;
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
     * Set type
     *
     * @param integer $type
     *
     * @return Order
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     *
     * @return Order
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set customerId
     *
     * @param string $customerId
     *
     * @return Order
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

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Order
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return Order
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Order
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}

