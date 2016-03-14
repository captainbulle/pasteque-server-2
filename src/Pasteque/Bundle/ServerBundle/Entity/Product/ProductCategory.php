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
 * ProductCategory.
 */
class ProductCategory
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $productId;

    /**
     * @var int
     */
    private $categoryOrder;

    /**
     * ProductCategory constructor.
     *
     * @param int $productId
     * @param int $categoryOrder
     */
    public function __construct($productId, $categoryOrder)
    {
        $this->productId = $productId;
        $this->categoryOrder = $categoryOrder;
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
     * Set productId.
     *
     * @param int $productId
     *
     * @return ProductCategory
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId.
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set categoryOrder.
     *
     * @param int $categoryOrder
     *
     * @return ProductCategory
     */
    public function setCategoryOrder($categoryOrder)
    {
        $this->categoryOrder = $categoryOrder;

        return $this;
    }

    /**
     * Get categoryOrder.
     *
     * @return int
     */
    public function getCategoryOrder()
    {
        return $this->categoryOrder;
    }
}
