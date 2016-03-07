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

use Pasteque\Bundle\ServerBundle\Entity\Tax\TaxCategory as TaxCategory;

/**
 * Product.
 */
class Product
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
    private $reference;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var string
     */
    private $barcodeType;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $priceBuy;

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
    private $taxCatId;

    /**
     * @var string
     */
    private $attributeSetId;

    /**
     * @var float
     */
    private $stockCost;

    /**
     * @var float
     */
    private $stockVolume;

    /**
     * @var string
     */
    private $image;

    /**
     * @var bool
     */
    private $isCom;

    /**
     * @var bool
     */
    private $isScale;

    /**
     * @var string
     */
    private $attributes;

    /**
     * @var bool
     */
    private $discountEnabled;

    /**
     * @var float
     */
    private $discountRate;

    /**
     * @var bool
     */
    private $visible;

    /**
     * Product constructor.
     *
     * @param string $reference
     * @param string $barcode
     * @param string $barcodeType
     * @param string $name
     * @param float  $priceBuy
     * @param float  $priceSell
     * @param string $categoryId
     * @param string $providerId
     * @param string $taxCatId
     * @param string $attributeSetId
     * @param float  $stockCost
     * @param float  $stockVolume
     * @param string $image
     * @param string $attributes
     * @param bool   $isCom
     * @param bool   $isScale
     * @param bool   $discountEnabled
     * @param float  $discountRate
     * @param string $displayId
     */
    public function __construct($reference, $barcode, $barcodeType, $name, $priceBuy, $priceSell,
                                $categoryId, $providerId, $taxCatId, $attributeSetId, $stockCost,
                                $stockVolume, $image, $attributes, $isCom = false, $isScale = false,
                                $discountEnabled = false, $discountRate = 0.0, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->reference = $reference;
        $this->barcode = $barcode;
        $this->barcodeType = $barcodeType;
        $this->name = $name;
        $this->priceBuy = $priceBuy;
        $this->priceSell = $priceSell;
        $this->categoryId = $categoryId;
        $this->providerId = $providerId;
        $this->taxCatId = $taxCatId;
        $this->attributeSetId = $attributeSetId;
        $this->stockVolume = $stockVolume;
        $this->image = $image;
        $this->attributes = $attributes;
        $this->isCom = $isCom;
        $this->isScale = $isScale;
        $this->discountEnabled = $discountEnabled;
        $this->discountRate = $discountRate;
        $this->visible = true;
    }

    /**
     * Get the price with tax.
     *
     * @param TaxCategory $taxCat
     *
     * @return float
     */
    public function getTotalPrice(TaxCategory $taxCat)
    {
        $currentTax = $taxCat->getCurrentTax();
        if ($currentTax != null) {
            return $this->priceSell * (1 + $currentTax->getRate());
        } else {
            return $this->priceSell;
        }
    }

    /**
     * Get the difference between the sell price and the buy price.
     *
     * @return float|null
     */
    public function getMargin()
    {
        if ($this->priceBuy !== null) {
            return $this->priceSell / $this->priceBuy;
        } else {
            return null;
        }
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
     * @return Product
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
     * Set reference.
     *
     * @param string $reference
     *
     * @return Product
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set barcode.
     *
     * @param string $barcode
     *
     * @return Product
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode.
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set barcodeType.
     *
     * @param string $barcodeType
     *
     * @return Product
     */
    public function setBarcodeType($barcodeType)
    {
        $this->barcodeType = $barcodeType;

        return $this;
    }

    /**
     * Get barcodeType.
     *
     * @return string
     */
    public function getBarcodeType()
    {
        return $this->barcodeType;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Product
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

    /**
     * Set priceBuy.
     *
     * @param float $priceBuy
     *
     * @return Product
     */
    public function setPriceBuy($priceBuy)
    {
        $this->priceBuy = $priceBuy;

        return $this;
    }

    /**
     * Get priceBuy.
     *
     * @return float
     */
    public function getPriceBuy()
    {
        return $this->priceBuy;
    }

    /**
     * Set priceSell.
     *
     * @param float $priceSell
     *
     * @return Product
     */
    public function setPriceSell($priceSell)
    {
        $this->priceSell = $priceSell;

        return $this;
    }

    /**
     * Get priceSell.
     *
     * @return float
     */
    public function getPriceSell()
    {
        return $this->priceSell;
    }

    /**
     * Set categoryId.
     *
     * @param string $categoryId
     *
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId.
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set providerId.
     *
     * @param string $providerId
     *
     * @return Product
     */
    public function setProviderId($providerId)
    {
        $this->providerId = $providerId;

        return $this;
    }

    /**
     * Get providerId.
     *
     * @return string
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set taxCatId.
     *
     * @param string $taxCatId
     *
     * @return Product
     */
    public function setTaxCatId($taxCatId)
    {
        $this->taxCatId = $taxCatId;

        return $this;
    }

    /**
     * Get taxCatId.
     *
     * @return string
     */
    public function getTaxCatId()
    {
        return $this->taxCatId;
    }

    /**
     * Set attributeSetId.
     *
     * @param string $attributeSetId
     *
     * @return Product
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
     * Set stockCost.
     *
     * @param float $stockCost
     *
     * @return Product
     */
    public function setStockCost($stockCost)
    {
        $this->stockCost = $stockCost;

        return $this;
    }

    /**
     * Get stockCost.
     *
     * @return float
     */
    public function getStockCost()
    {
        return $this->stockCost;
    }

    /**
     * Set stockVolume.
     *
     * @param float $stockVolume
     *
     * @return Product
     */
    public function setStockVolume($stockVolume)
    {
        $this->stockVolume = $stockVolume;

        return $this;
    }

    /**
     * Get stockVolume.
     *
     * @return float
     */
    public function getStockVolume()
    {
        return $this->stockVolume;
    }

    /**
     * Set image.
     *
     * @param string $image
     *
     * @return Product
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set isCom.
     *
     * @param bool $isCom
     *
     * @return Product
     */
    public function setIsCom($isCom)
    {
        $this->isCom = $isCom;

        return $this;
    }

    /**
     * Get isCom.
     *
     * @return bool
     */
    public function getIsCom()
    {
        return $this->isCom;
    }

    /**
     * Set isScale.
     *
     * @param bool $isScale
     *
     * @return Product
     */
    public function setIsScale($isScale)
    {
        $this->isScale = $isScale;

        return $this;
    }

    /**
     * Get isScale.
     *
     * @return bool
     */
    public function getIsScale()
    {
        return $this->isScale;
    }

    /**
     * Set attributes.
     *
     * @param string $attributes
     *
     * @return Product
     */
    public function setAttributes($attributes)
    {
        $this->attributes = $attributes;

        return $this;
    }

    /**
     * Get attributes.
     *
     * @return string
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * Set discountEnabled.
     *
     * @param bool $discountEnabled
     *
     * @return Product
     */
    public function setDiscountEnabled($discountEnabled)
    {
        $this->discountEnabled = $discountEnabled;

        return $this;
    }

    /**
     * Get discountEnabled.
     *
     * @return bool
     */
    public function getDiscountEnabled()
    {
        return $this->discountEnabled;
    }

    /**
     * Set discountRate.
     *
     * @param float $discountRate
     *
     * @return Product
     */
    public function setDiscountRate($discountRate)
    {
        $this->discountRate = $discountRate;

        return $this;
    }

    /**
     * Get discountRate.
     *
     * @return float
     */
    public function getDiscountRate()
    {
        return $this->discountRate;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return Product
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible.
     *
     * @return bool
     */
    public function getVisible()
    {
        return $this->visible;
    }
}
