<?php

namespace Pasteque\Bundle\ServerBundle\Entity\User;

/**
 * User
 */
class User
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
    private $password;

    /**
     * @var string
     */
    private $roleId;

    /**
     * @var string
     */
    private $card;

    /**
     * @var string
     */
    private $image;

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

    public function __construct($name, $password, $card, $image, $roleId){
        $this->name = $name;
        $this->password = $password;
        $this->card = $card;
        $this->image = $image;
        $this->roleId = $roleId;
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
     * @return User
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
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set roleId
     *
     * @param string $roleId
     *
     * @return User
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set card
     *
     * @param string $card
     *
     * @return User
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return User
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set active
     *
     * @param tinyint $active
     *
     * @return User
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return tinyint
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set addedDate
     *
     * @param \DateTime $addedDate
     *
     * @return User
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
     * Set addedBy
     *
     * @param string $addedBy
     *
     * @return User
     */
    public function setAddedBy($addedBy)
    {
        $this->addedBy = $addedBy;

        return $this;
    }

    /**
     * Get addedBy
     *
     * @return string
     */
    public function getAddedBy()
    {
        return $this->addedBy;
    }

    /**
     * Set updatedDate
     *
     * @param \DateTime $updatedDate
     *
     * @return User
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
     * Set updatedBy
     *
     * @param string $updatedBy
     *
     * @return User
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }
}

