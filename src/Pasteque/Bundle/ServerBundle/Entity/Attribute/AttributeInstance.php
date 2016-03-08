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

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeInstance.
 */
class AttributeInstance
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
    private $attrSetInstId;

    /**
     * @var int
     */
    private $attrId;

    /**
     * @var string
     */
    private $value;

    /**
     * AttributeInstance constructor.
     *
     * @param int $attrSetInstId
     * @param int $attrId
     * @param string $value
     * @param string $displayId
     */
    public function __construct($attrSetInstId, $attrId, $value, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attrSetInstId = $attrSetInstId;
        $this->attrId = $attrId;
        $this->value = $value;
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
     * @return AttributeInstance
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
     * Set attrSetInstId.
     *
     * @param int $attrSetInstId
     *
     * @return AttributeInstance
     */
    public function setAttrSetInstId($attrSetInstId)
    {
        $this->attrSetInstId = $attrSetInstId;

        return $this;
    }

    /**
     * Get attrSetInstId.
     *
     * @return int
     */
    public function getAttrSetInstId()
    {
        return $this->attrSetInstId;
    }

    /**
     * Set attrId.
     *
     * @param int $attrId
     *
     * @return AttributeInstance
     */
    public function setAttrId($attrId)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attrId.
     *
     * @return int
     */
    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * Set value.
     *
     * @param string $value
     *
     * @return AttributeInstance
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
