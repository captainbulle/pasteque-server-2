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

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxCategory.
 */
class TaxCategory
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
    private $name;

    /**
     * @var Tax[]
     */
    private $taxes;

    /**
     * TaxCategory constructor.
     *
     * @param string $name
     * @param string $displayId
     */
    public function __construct($name, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->taxes = array();
    }

    /**
     * @param Tax $tax
     */
    public function addTax(Tax $tax)
    {
        array_push($this->taxes, $tax);
    }

    /**
     * @param null $timestamp
     *
     * @return Tax|null
     */
    public function getCurrentTax($timestamp = null)
    {
        /*
         * @var Tax
         */
        $current = null;
        if ($timestamp === null) {
            $timestamp = time();
        }
        foreach ($this->taxes as $tax) {
            if ($tax->isValid($timestamp) && ($current === null || $tax->getStartDate() > $current->getStartDate())) {
                $current = $tax;
            }
        }

        return $current;
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
     * @return TaxCategory
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
     * Set name.
     *
     * @param string $name
     *
     * @return TaxCategory
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
