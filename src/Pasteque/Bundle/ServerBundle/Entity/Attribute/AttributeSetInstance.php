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
 * AttributeSetInstance.
 */
class AttributeSetInstance
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
    private $attributeSetId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var AttributeInstance[]
     */
    private $attributeInstances;

    /**
     * AttributeSetInstance constructor.
     *
     * @param string $attributeSetId
     * @param string $description
     * @param string $displayId
     */
    public function __construct($attributeSetId, $description= null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attributeSetId = $attributeSetId;
        $this->description = $description;
        $this->attributeInstances = array();
    }

    /**
     * Add an instance of attribute in the array attributeInstances.
     *
     * @param AttributeInstance $attributeInstance
     */
    public function addAttributeInstance($attributeInstance)
    {
        array_push($this->attributeInstances, $attributeInstance);
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
     * @return AttributeSetInstance
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
     * Set attributeSetId.
     *
     * @param string $attributeSetId
     *
     * @return AttributeSetInstance
     */
    public function setAttributeSetId($attributeSetId)
    {
        $this->attributeSetId = $attributeSetId;

        return $this;
    }

    /**
     * Get attributeSetId.
     *
     * @return string
     */
    public function getAttributeSetId()
    {
        return $this->attributeSetId;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return AttributeSetInstance
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get attributeInstances.
     *
     * @return array
     */
    public function getAttributeInstances()
    {
        return $this->attributeInstances;
    }
}
