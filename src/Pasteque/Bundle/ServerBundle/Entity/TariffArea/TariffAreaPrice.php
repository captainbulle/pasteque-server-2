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

namespace Pasteque\Bundle\ServerBundle\Entity\TariffArea;

/**
 * TariffAreaPrice
 */
class TariffAreaPrice
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var float
     */
    private $priceSell;

    /**
     * TariffAreaPrice constructor.
     * @param string $productId
     * @param float $priceSell
     */
    public function __construct($productId, $priceSell)
    {
        $this->productId = $productId;
        $this->priceSell = $priceSell;
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
     * Set productId
     *
     * @param string $productId
     *
     * @return TariffAreaPrice
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set priceSell
     *
     * @param float $priceSell
     *
     * @return TariffAreaPrice
     */
    public function setPriceSell($priceSell)
    {
        $this->priceSell = $priceSell;

        return $this;
    }

    /**
     * Get priceSell
     *
     * @return float
     */
    public function getPriceSell()
    {
        return $this->priceSell;
    }
}

