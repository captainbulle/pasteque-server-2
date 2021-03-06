<?php
//    POS-Tech API
//
//    Copyright (C) 2012 Scil (http://scil.coop)
//
//    This file is part of POS-Tech.
//
//    POS-Tech is free software: you can redistribute it and/or modify
//    it under the terms of the GNU General Public License as published by
//    the Free Software Foundation, either version 3 of the License, or
//    (at your option) any later version.
//
//    POS-Tech is distributed in the hope that it will be useful,
//    but WITHOUT ANY WARRANTY; without even the implied warranty of
//    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//    GNU General Public License for more details.
//
//    You should have received a copy of the GNU General Public License
//    along with POS-Tech.  If not, see <http://www.gnu.org/licenses/>.

namespace Pasteque\Bundle\ServerBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;

/**
 * User.
 */
class User extends BaseUser
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    private $displayId;

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
     *
     * @param string $username
     * @param string $password
     * @param string $card
     * @param string $image
     * @param string $roleId
     * @param User   $user
     * @param string $displayId
     */
    public function __construct($username, $password, $card, $image, $roleId, User $user, $displayId = null)
    {
        parent::__construct();
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
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
     * @return User
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
     * Set roleId.
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
     * Get roleId.
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set card.
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
     * Get card.
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set image.
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
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return User
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set addedDate.
     *
     * @param \DateTime $addedDate
     *
     * @return User
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
     * @return User
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
     * @return User
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
     * @return User
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
