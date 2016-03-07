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
 * TariffArea
 */
class TariffArea
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var string
     */
    private $note;

    /**
     * @var TariffAreaPrice[]
     */
    private $tariffAreaPrices;

    /**
     * TariffArea constructor.
     * @param string $name
     * @param int $displayOrder
     * @param string $note
     */
    public function __construct($name, $displayOrder=0, $note=null)
    {
        $this->name = $name;
        $this->displayOrder = $displayOrder;
        $this->note = $note;
        $this->tariffAreaPrices = array();
    }

    /**
     * @param string $productId
     * @param float $price
     */
    function addTariffAreaPrice($productId, $price) {
        array_push($this->tariffAreaPrices, new TariffAreaPrice($productId, $price));
    }

    /**
     * @param string $productId
     * @return float|null
     */
    function getPrice($productId) {
        foreach ($this->tariffAreaPrices as $price) {
            if ($price->getProductId() == $productId) {
                return $price->getPrice();
            }
        }
        return null;
    }

    /**
     * @return TariffAreaPrice[]
     */
    function getPrices() {
        return $this->tariffAreaPrices;
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
     * Set name
     *
     * @param string $name
     *
     * @return TariffArea
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return TariffArea
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

    /**
     * Set note
     *
     * @param string $note
     *
     * @return TariffArea
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}

