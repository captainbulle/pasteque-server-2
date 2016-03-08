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
 * SubGroupProduct
 */
class SubGroupProduct
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $subGroupId;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * SubGroupProduct constructor.
     * @param int $subGroupId
     * @param int $productId
     * @param int $displayOrder
     */
    public function __construct($subGroupId, $productId, $displayOrder=null)
    {
        $this->subGroupId = $subGroupId;
        $this->productId = $productId;
        $this->displayOrder = $displayOrder;
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
     * Set subGroupId
     *
     * @param int $subGroupId
     *
     * @return SubGroupProduct
     */
    public function setSubGroupId($subGroupId)
    {
        $this->subGroupId = $subGroupId;

        return $this;
    }

    /**
     * Get subGroupId
     *
     * @return int
     */
    public function getSubGroupId()
    {
        return $this->subGroupId;
    }

    /**
     * Set productId
     *
     * @param int $productId
     *
     * @return SubGroupProduct
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return SubGroupProduct
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }
}

