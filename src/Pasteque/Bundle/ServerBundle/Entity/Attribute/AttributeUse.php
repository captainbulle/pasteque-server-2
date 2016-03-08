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
 * AttributeUse.
 */
class AttributeUse
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
     * @var int
     */
    private $attrId;

    /**
     * @var int
     */
    private $lineNo;

    /**
     * AttributeUse constructor.
     *
     * @param int $attrSetId
     * @param int $attrId
     * @param int    $lineNo
     * @param string $displayId
     */
    public function __construct($attrSetId, $attrId, $lineNo, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attrSetId = $attrSetId;
        $this->attrId = $attrId;
        $this->lineNo = $lineNo;
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
     * @return AttributeUse
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
     * @return AttributeUse
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
     * Set attrId.
     *
     * @param int $attrId
     *
     * @return AttributeUse
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
     * Set lineNo.
     *
     * @param int $lineNo
     *
     * @return AttributeUse
     */
    public function setLineNo($lineNo)
    {
        $this->lineNo = $lineNo;

        return $this;
    }

    /**
     * Get lineNo.
     *
     * @return int
     */
    public function getLineNo()
    {
        return $this->lineNo;
    }
}
