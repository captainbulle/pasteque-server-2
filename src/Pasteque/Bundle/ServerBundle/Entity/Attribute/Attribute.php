<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

use Symfony\Component\Validator\Constraints\DateTime;
use Pasteque\Bundle\ServerBundle\Entity\User as User;

/**
 * Attribute.
 */
class Attribute
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
    private $name;

    /**
     * @var string
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $addedDate;

    /**
     * @var string
     */
    private $addedBy;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var string
     */
    private $updatedBy;

    /**
     * @var array
     */
    private $values;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * Attribute constructor.
     *
     * @param string $name
     * @param User   $user
     * @param int    $displayOrder
     * @param string $displayId
     */
    private function __construct($name, User $user, $displayOrder = 0, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->displayOrder = $displayOrder;
        $this->active = 'A';
        $this->addedDate = new DateTime();
        $this->addedBy = $user->getUserName();
        $this->updatedDate = null;
        $this->updatedBy = null;
        $this->values = array();
    }

    /**
     * @param string $value
     */
    public function addValue($value)
    {
        array_push($this->values, $value);
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
     * @return Attribute
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
     * Set name.
     *
     * @param string $name
     *
     * @return Attribute
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
     * Get Values.
     *
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return Attribute
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set active.
     *
     * @param string $active
     *
     * @return Attribute
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active.
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set addedDate.
     *
     * @param \DateTime $addedDate
     *
     * @return Attribute
     */
    public function setAddedDate(\DateTime $addedDate)
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
     * Set addedBy.
     *
     * @param string $addedBy
     *
     * @return Attribute
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy.
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set updatedDate.
     *
     * @param \DateTime $updatedDate
     *
     * @return Attribute
     */
    public function setUpdatedDate(\DateTime $updatedDate)
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
     * Set updatedBy.
     *
     * @param string $updatedBy
     *
     * @return Attribute
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}
