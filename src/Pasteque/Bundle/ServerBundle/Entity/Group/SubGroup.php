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

namespace Pasteque\Bundle\ServerBundle\Entity\Group;

/**
 * SubGroup.
 */
class SubGroup
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $groupId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var SubGroupProduct[]
     */
    private $subGroupProducts;

    /**
     * SubGroup constructor.
     * @param int $groupId
     * @param string $name
     * @param bool   $required
     * @param string $image
     * @param int    $displayOrder
     */
    public function __construct($groupId, $name, $required = true, $image = null, $displayOrder = 0)
    {
        $this->groupId = $groupId;
        $this->name = $name;
        $this->required = $required;
        $this->image = $image;
        $this->displayOrder = $displayOrder;
        $this->subGroupProducts = array();
    }

    /**
     * @param SubGroupProduct $subGroupProduct
     */
    public function addSubGroupProduct($subGroupProduct)
    {
        array_push($this->subGroupProducts, $subGroupProduct);
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
     * Set groupId.
     *
     * @param int $groupId
     *
     * @return SubGroup
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId.
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return SubGroup
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
     * Set required.
     *
     * @param bool $required
     *
     * @return SubGroup
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required.
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return SubGroup
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
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return SubGroup
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
}
