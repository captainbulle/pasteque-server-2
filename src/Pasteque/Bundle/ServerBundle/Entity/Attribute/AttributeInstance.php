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
     * @var string
     */
    private $attributeSetInstanceId;

    /**
     * @var string
     */
    private $attributeId;

    /**
     * @var string
     */
    private $value;

    /**
     * AttributeInstance constructor.
     *
     * @param string $attributeSetInstanceId
     * @param string $attributeId
     * @param string $value
     * @param string $displayId
     */
    public function __construct($attributeSetInstanceId, $attributeId, $value, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attributeSetInstanceId = $attributeSetInstanceId;
        $this->attributeId = $attributeId;
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
     * Set attributeSetInstanceId.
     *
     * @param string $attributeSetInstanceId
     *
     * @return AttributeInstance
     */
    public function setAttributeSetInstanceId($attributeSetInstanceId)
    {
        $this->attributeSetInstanceId = $attributeSetInstanceId;

        return $this;
    }

    /**
     * Get attributeSetInstanceId.
     *
     * @return string
     */
    public function getAttributeSetInstanceId()
    {
        return $this->attributeSetInstanceId;
    }

    /**
     * Set attributeId.
     *
     * @param string $attributeId
     *
     * @return AttributeInstance
     */
    public function setAttributeId($attributeId)
    {
        $this->attributeId = $attributeId;

        return $this;
    }

    /**
     * Get attributeId.
     *
     * @return string
     */
    public function getAttributeId()
    {
        return $this->attributeId;
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
