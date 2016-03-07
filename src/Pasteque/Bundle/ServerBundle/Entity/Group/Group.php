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
 * Group
 */
class Group
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $reference;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $priceSell;

    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var string
     */
    private $providerId;

    /**
     * @var string
     */
    private $taxCategoryId;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @var bool
     */
    private $isScale;

    /**
     * @var float
     */
    private $priceBuy;

    /**
     * @var string
     */
    private $attributeSetId;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $image;

    /**
     * @var bool
     */
    private $discountEnabled;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * @var SubGroup[]
     */
    private $subGroups;

    /**
     * Group constructor.
     * @param string $reference
     * @param string $name
     * @param float $priceSell
     * @param string $categoryId
     * @param string $providerId
     * @param string $taxCategoryId
     * @param int $displayOrder
     * @param bool $isScale
     * @param float $priceBuy
     * @param string $attributeSetId
     * @param string $barcode
     * @param string $image
     * @param bool $discountEnabled
     * @param float $discountRate
     */
    public function __construct($reference, $name, $priceSell, $categoryId, $providerId, $taxCategoryId, $displayOrder,
                                $isScale, $priceBuy=null, $attributeSetId=null, $barcode=null, $image=null,
                                $discountEnabled=false, $discountRate=0.0)
    {
        $this->reference = $reference;
        $this->name = $name;
        $this->priceSell = $priceSell;
        $this->categoryId = $categoryId;
        $this->providerId = $providerId;
        $this->taxCategoryId = $taxCategoryId;
        $this->displayOrder = $displayOrder;
        $this->visible = true;
        $this->isScale = $isScale;
        $this->priceBuy = $priceBuy;
        $this->attributeSetId = $attributeSetId;
        $this->barcode = $barcode;
        $this->image = $image;
        $this->discountEnabled = $discountEnabled;
        $this->discountRate = $discountRate;
        $this->subGroups = array();
    }

    /**
     * @param SubGroup $subGroup
     */
    public function addSubGroup($subGroup) {
        array_push($this->subGroups, $subGroup);
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
     * Set reference
     *
     * @param string $reference
     *
     * @return Group
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Group
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
     * Set priceSell
     *
     * @param float $priceSell
     *
     * @return Group
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

    /**
     * Set categoryId
     *
     * @param string $categoryId
     *
     * @return Group
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set providerId
     *
     * @param string $providerId
     *
     * @return Group
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * Get providerId
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set taxCategoryId
     *
     * @param string $taxCategoryId
     *
     * @return Group
     */
    public function setTaxCategoryId($taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;

        return $this;
    }

    /**
     * Get taxCategoryId
     *
     * @return string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return Group
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
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Group
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set isScale
     *
     * @param boolean $isScale
     *
     * @return Group
     */
    public function setIsScale($isScale)
    {
        $this->isScale = $isScale;

        return $this;
    }

    /**
     * Get isScale
     *
     * @return bool
     */
    public function getIsScale()
    {
        return $this->isScale;
    }

    /**
     * Set priceBuy
     *
     * @param float $priceBuy
     *
     * @return Group
     */
    public function setPriceBuy($priceBuy)
    {
        $this->priceBuy = $priceBuy;

        return $this;
    }

    /**
     * Get priceBuy
     *
     * @return float
     */
    public function getPriceBuy()
    {
        return $this->priceBuy;
    }

    /**
     * Set attributeSetId
     *
     * @param string $attributeSetId
     *
     * @return Group
     */
    public function setAttributeSetId($attributeSetId)
    {
        $this->attributeSetId = $attributeSetId;

        return $this;
    }

    /**
     * Get attributeSetId
     *
     * @return string
     */
    public function getAttributeSetId()
    {
        return $this->attributeSetId;
    }

    /**
     * Set barcode
     *
     * @param string $barcode
     *
     * @return Group
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Group
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set discountEnabled
     *
     * @param boolean $discountEnabled
     *
     * @return Group
     */
    public function setDiscountEnabled($discountEnabled)
    {
        $this->discountEnabled = $discountEnabled;

        return $this;
    }

    /**
     * Get discountEnabled
     *
     * @return bool
     */
    public function getDiscountEnabled()
    {
        return $this->discountEnabled;
    }

    /**
     * Set discountRate
     *
     * @param float $discountRate
     *
     * @return Group
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }
}

