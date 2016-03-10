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

namespace Pasteque\Bundle\ServerBundle\Entity\Product;

/**
 * ProductCom.
 */
class ProductCom
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
    private $productId1;

    /**
     * @var int
     */
    private $productId2;

    /**
     * ProductCom constructor.
     * @param int $productId1
     * @param int $productId2
     * @param string $displayId
     */
    public function __construct($productId1, $productId2, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->productId1 = $productId1;
        $this->productId2 = $productId2;
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
     * @return ProductCom
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
     * Set productId1.
     *
     * @param int $productId1
     *
     * @return ProductCom
     */
    public function setProductId($productId1)
    {
        $this->productId1 = $productId1;

        return $this;
    }

    /**
     * Get productId1.
     *
     * @return int
     */
    public function getProductId1()
    {
        return $this->productId1;
    }

    /**
     * Set productId2.
     *
     * @param int $productId2
     *
     * @return ProductCom
     */
    public function setProductId2($productId2)
    {
        $this->productId2 = $productId2;

        return $this;
    }

    /**
     * Get productId2.
     *
     * @return int
     */
    public function getProductId2()
    {
        return $this->productId2;
    }
}
