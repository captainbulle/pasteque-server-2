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

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Customer.
 */
class Customer
{
    /** Minimal size of card number */
    const CARD_SIZE = 7;
    /** Barcode prefix for customer cards */
    const CARD_PREFIX = 'c';

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
    private $displayName;

    /**
     * @var string
     */
    private $searchKey;

    /**
     * @var int
     */
    private $number;

    /**
     * @var int
     */
    private $customerTaxCategoryId;

    /**
     * @var int
     */
    private $discountProfileId;

    /**
     * @var int
     */
    private $tariffAreaId;

    /**
     * @var string
     */
    private $card;

    /**
     * @var float
     */
    private $maxDebt;

    /**
     * @var float
     */
    private $prepaid;

    /**
     * @var float
     */
    private $currentDebt;

    /**
     * @var \DateTime
     */
    private $debtDate;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phone;

    /**
     * @var string
     */
    private $phone2;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $postal;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $country;

    /**
     * @var \DateTime
     */
    private $expireDate;

    /**
     * @var string
     */
    private $note;

    /**
     * @var bool
     */
    private $visible;

    /**
     * Customer constructor.
     *
     * @param string    $displayName
     * @param string    $searchKey
     * @param int       $number
     * @param int    $customerTaxCategoryId
     * @param int       $discountProfileId
     * @param int       $tariffAreaId
     * @param string    $card
     * @param float     $maxDebt
     * @param float     $prepaid
     * @param float     $currentDebt
     * @param \DateTime $debtDate
     * @param string    $firstname
     * @param string    $lastname
     * @param string    $email
     * @param string    $phone
     * @param string    $phone2
     * @param string    $fax
     * @param string    $address
     * @param string    $address2
     * @param string    $postal
     * @param string    $region
     * @param string    $country
     * @param \DateTime $expireDate
     * @param string    $note
     * @param string    $displayId
     */
    public function __construct($displayName, $searchKey, $number, $customerTaxCategoryId, $discountProfileId,
                                $tariffAreaId, $card, $maxDebt, $prepaid, $currentDebt, \DateTime $debtDate,
                                $firstname, $lastname, $email, $phone, $phone2, $fax, $address, $address2, $postal,
                                $region, $country, \DateTime $expireDate, $note = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->displayName = $displayName;
        $this->searchKey = $searchKey;
        $this->number = $number;
        $this->customerTaxCategoryId = $customerTaxCategoryId;
        $this->discountProfileId = $discountProfileId;
        $this->tariffAreaId = $tariffAreaId;
        $this->card = $card;
        $this->maxDebt = $maxDebt;
        $this->prepaid = $prepaid;
        $this->currentDebt = $currentDebt;
        $this->debtDate = $debtDate;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->phone2 = $phone2;
        $this->fax = $fax;
        $this->address = $address;
        $this->address2 = $address2;
        $this->postal = $postal;
        $this->region = $region;
        $this->country = $country;
        $this->expireDate = $expireDate;
        $this->note = $note;
        $this->visible = true;
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
     * @return Customer
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
     * Set displayName.
     *
     * @param string $displayName
     *
     * @return Customer
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;

        return $this;
    }

    /**
     * Get displayName.
     *
     * @return string
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set searchKey.
     *
     * @param string $searchKey
     *
     * @return Customer
     */
    public function setSearchKey($searchKey)
    {
        $this->searchKey = $searchKey;

        return $this;
    }

    /**
     * Get searchKey.
     *
     * @return string
     */
    public function getSearchKey()
    {
        return $this->searchKey;
    }

    /**
     * Set number.
     *
     * @param int $number
     *
     * @return Customer
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number.
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set customerTaxCategoryId.
     *
     * @param int $customerTaxCategoryId
     *
     * @return Customer
     */
    public function setCustomerTaxCategoryId($customerTaxCategoryId)
    {
        $this->customerTaxCategoryId = $customerTaxCategoryId;

        return $this;
    }

    /**
     * Get customerTaxCategoryId.
     *
     * @return int
     */
    public function getCustomerTaxCategoryId()
    {
        return $this->customerTaxCategoryId;
    }

    /**
     * Set discountProfileId.
     *
     * @param int $discountProfileId
     *
     * @return Customer
     */
    public function setDiscountProfileId($discountProfileId)
    {
        $this->discountProfileId = $discountProfileId;

        return $this;
    }

    /**
     * Get discountProfileId.
     *
     * @return int
     */
    public function getDiscountProfileId()
    {
        return $this->discountProfileId;
    }

    /**
     * Set tariffAreaId.
     *
     * @param int $tariffAreaId
     *
     * @return Customer
     */
    public function setTariffAreaId($tariffAreaId)
    {
        $this->tariffAreaId = $tariffAreaId;

        return $this;
    }

    /**
     * Get tariffAreaId.
     *
     * @return int
     */
    public function getTariffAreaId()
    {
        return $this->tariffAreaId;
    }

    /**
     * Set card.
     *
     * @param string $card
     *
     * @return Customer
     */
    public function setCard($card)
    {
        $this->card = $card;

        return $this;
    }

    /**
     * Get card.
     *
     * @return string
     */
    public function getCard()
    {
        return $this->card;
    }

    /**
     * Set maxDebt.
     *
     * @param float $maxDebt
     *
     * @return Customer
     */
    public function setMaxDebt($maxDebt)
    {
        $this->maxDebt = $maxDebt;

        return $this;
    }

    /**
     * Get maxDebt.
     *
     * @return float
     */
    public function getMaxDebt()
    {
        return $this->maxDebt;
    }

    /**
     * Set prepaid.
     *
     * @param float $prepaid
     *
     * @return Customer
     */
    public function setPrepaid($prepaid)
    {
        $this->prepaid = $prepaid;

        return $this;
    }

    /**
     * Get prepaid.
     *
     * @return float
     */
    public function getPrepaid()
    {
        return $this->prepaid;
    }

    /**
     * Set currentDebt.
     *
     * @param float $currentDebt
     *
     * @return Customer
     */
    public function setCurrentDebt($currentDebt)
    {
        $this->currentDebt = $currentDebt;

        return $this;
    }

    /**
     * Get currentDebt.
     *
     * @return float
     */
    public function getCurrentDebt()
    {
        return $this->currentDebt;
    }

    /**
     * Set debtDate.
     *
     * @param \DateTime $debtDate
     *
     * @return Customer
     */
    public function setDebtDate($debtDate)
    {
        $this->debtDate = $debtDate;

        return $this;
    }

    /**
     * Get debtDate.
     *
     * @return \DateTime
     */
    public function getDebtDate()
    {
        return $this->debtDate;
    }

    /**
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return Customer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname.
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname.
     *
     * @param string $lastname
     *
     * @return Customer
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname.
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set email.
     *
     * @param string $email
     *
     * @return Customer
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email.
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set phone.
     *
     * @param string $phone
     *
     * @return Customer
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set phone2.
     *
     * @param string $phone2
     *
     * @return Customer
     */
    public function setPhone2($phone2)
    {
        $this->phone2 = $phone2;

        return $this;
    }

    /**
     * Get phone2.
     *
     * @return string
     */
    public function getPhone2()
    {
        return $this->phone2;
    }

    /**
     * Set fax.
     *
     * @param string $fax
     *
     * @return Customer
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax.
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set address.
     *
     * @param string $address
     *
     * @return Customer
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set address2.
     *
     * @param string $address2
     *
     * @return Customer
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;

        return $this;
    }

    /**
     * Get address2.
     *
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * Set postal.
     *
     * @param string $postal
     *
     * @return Customer
     */
    public function setPostal($postal)
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * Get postal.
     *
     * @return string
     */
    public function getPostal()
    {
        return $this->postal;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Customer
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region.
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Set country.
     *
     * @param string $country
     *
     * @return Customer
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set expireDate.
     *
     * @param \DateTime $expireDate
     *
     * @return Customer
     */
    public function setExpireDate($expireDate)
    {
        $this->expireDate = $expireDate;

        return $this;
    }

    /**
     * Get expireDate.
     *
     * @return \DateTime
     */
    public function getExpireDate()
    {
        return $this->expireDate;
    }

    /**
     * Set note.
     *
     * @param string $note
     *
     * @return Customer
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note.
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return Customer
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
