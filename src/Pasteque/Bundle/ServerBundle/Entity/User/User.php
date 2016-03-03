<?php

namespace Pasteque\Bundle\ServerBundle\Entity\User;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 */
class User extends BaseUser{
    /**
     * @var int
     */
    protected $id;

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
     * @var bool
     */
    private $visible;

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
     * User constructor.
     * @param string $username
     * @param string $password
     * @param string $card
     * @param string $image
     * @param string $roleId
     * @param User $user
     */
    public function __construct($username, $password, $card, $image, $roleId, User $user){
        parent::__construct();
        $this->username = $username;
        $this->password = $password;
        $this->card = $card;
        $this->image = $image;
        $this->roleId = $roleId;
        $this->visible = true;
        $this->addedDate = new \DateTime();
        $this->addedBy = $user->getUsername();
        $this->updatedDate = null;
        $this->updatedBy = null;
    }

    /**
     * Get id
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set roleId
     * @param string $roleId
     * @return User
     */
    public function setRoleId($roleId){
        $this->roleId = $roleId;
        return $this;
    }

    /**
     * Get roleId
     * @return string
     */
    public function getRoleId(){
        return $this->roleId;
    }

    /**
     * Set card
     * @param string $card
     * @return User
     */
    public function setCard($card){
        $this->card = $card;
        return $this;
    }

    /**
     * Get card
     * @return string
     */
    public function getCard(){
        return $this->card;
    }

    /**
     * Set image
     * @param string $image
     * @return User
     */
    public function setImage($image){
        $this->image = $image;
        return $this;
    }

    /**
     * Get image
     * @return string
     */
    public function getImage(){
        return $this->image;
    }

    /**
     * Set visible
     * @param boolean $visible
     * @return User
     */
    public function setVisible($visible){
        $this->visible = $visible;
        return $this;
    }

    /**
     * Get visible
     * @return bool
     */
    public function getVisible(){
        return $this->visible;
    }

    /**
     * Set addedDate
     * @param \DateTime $addedDate
     * @return User
     */
    public function setAddedDate(\DateTime $addedDate){
        $this->addedDate = $addedDate;
        return $this;
    }

    /**
     * Get addedDate
     * @return \DateTime
     */
    public function getAddedDate(){
        return $this->addedDate;
    }

    /**
     * Set addedBy
     * @param string $addedBy
     * @return User
     */
    public function setAddedBy($addedBy){
        $this->addedBy = $addedBy;
        return $this;
    }

    /**
     * Get addedBy
     * @return string
     */
    public function getAddedBy(){
        return $this->addedBy;
    }

    /**
     * Set updatedDate
     * @param \DateTime $updatedDate
     * @return User
     */
    public function setUpdatedDate(\DateTime $updatedDate){
        $this->updatedDate = $updatedDate;
        return $this;
    }

    /**
     * Get updatedDate
     * @return \DateTime
     */
    public function getUpdatedDate(){
        return $this->updatedDate;
    }

    /**
     * Set updatedBy
     * @param string $updatedBy
     * @return User
     */
    public function setUpdatedBy($updatedBy){
        $this->updatedBy = $updatedBy;
        return $this;
    }

    /**
     * Get updatedBy
     * @return string
     */
    public function getUpdatedBy(){
        return $this->updatedBy;
    }
}

