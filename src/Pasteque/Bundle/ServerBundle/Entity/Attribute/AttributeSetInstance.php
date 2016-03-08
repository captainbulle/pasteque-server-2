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
     * @var int
     */
    private $attrSetId;

    /**
     * @var string
     */
    private $description;

    /**
     * @var AttributeInstance[]
     */
    private $attrInsts;

    /**
     * AttributeSetInstance constructor.
     *
     * @param int $attrSetId
     * @param string $description
     * @param string $displayId
     */
    public function __construct($attrSetId, $description= null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attrSetId = $attrSetId;
        $this->description = $description;
        $this->attrInsts = array();
    }

    /**
     * Add an instance of attribute in the array attrInsts.
     *
     * @param $attrInst
     */
    public function addAttrInst($attrInst)
    {
        array_push($this->attrInsts, $attrInst);
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
     * Set attrSetId.
     *
     * @param int $attrSetId
     *
     * @return AttributeSetInstance
     */
    public function setAttrSetId($attrSetId)
    {
        $this->attrSetId = $attrSetId;

        return $this;
    }

    /**
     * Get attrSetId.
     *
     * @return int
     */
    public function getAttrSetId()
    {
        return $this->attrSetId;
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
     * Get attrInsts.
     *
     * @return array
     */
    public function getAttrInsts()
    {
        return $this->attrInsts;
    }
}
