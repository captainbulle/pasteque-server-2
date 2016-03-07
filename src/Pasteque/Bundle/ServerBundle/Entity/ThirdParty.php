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
 * ThirdParty
 */
class ThirdParty
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
    private $cif;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $address;

    /**
     * @var string
     */
    private $contactComm;

    /**
     * @var string
     */
    private $contactFact;

    /**
     * @var string
     */
    private $payRule;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $phoneNumber;

    /**
     * @var string
     */
    private $mobileNumber;

    /**
     * @var string
     */
    private $faxNumber;

    /**
     * @var string
     */
    private $webPage;

    /**
     * @var string
     */
    private $note;

    /**
     * ThirdParty constructor.
     * @param string $cif
     * @param string $name
     * @param string $address
     * @param string $contactComm
     * @param string $contactFact
     * @param string $payRule
     * @param string $email
     * @param string $phoneNumber
     * @param string $mobileNumber
     * @param string $faxNumber
     * @param string $webPage
     * @param string $note
     * @param string $displayId
     */
    public function __construct($cif, $name, $address, $contactComm, $contactFact, $payRule, $email = null,
                                $phoneNumber = null, $mobileNumber = null, $faxNumber = null, $webPage = null,
                                $note = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->cif = $cif;
        $this->name = $name;
        $this->address = $address;
        $this->contactComm = $contactComm;
        $this->contactFact = $contactFact;
        $this->payRule = $payRule;
        $this->email = $email;
        $this->phoneNumber = $phoneNumber;
        $this->mobileNumber = $mobileNumber;
        $this->faxNumber = $faxNumber;
        $this->webPage = $webPage;
        $this->note = $note;
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
     * Set displayId.
     *
     * @param string $displayId
     *
     * @return ThirdParty
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
     * Set cif
     *
     * @param string $cif
     *
     * @return ThirdParty
     */
    public function setCif($cif)
    {
        $this->cif = $cif;

        return $this;
    }

    /**
     * Get cif
     *
     * @return string
     */
    public function getCif()
    {
        return $this->cif;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ThirdParty
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
     * Set address
     *
     * @param string $address
     *
     * @return ThirdParty
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set contactComm
     *
     * @param string $contactComm
     *
     * @return ThirdParty
     */
    public function setContactComm($contactComm)
    {
        $this->contactComm = $contactComm;

        return $this;
    }

    /**
     * Get contactComm
     *
     * @return string
     */
    public function getContactComm()
    {
        return $this->contactComm;
    }

    /**
     * Set contactFact
     *
     * @param string $contactFact
     *
     * @return ThirdParty
     */
    public function setContactFact($contactFact)
    {
        $this->contactFact = $contactFact;

        return $this;
    }

    /**
     * Get contactFact
     *
     * @return string
     */
    public function getContactFact()
    {
        return $this->contactFact;
    }

    /**
     * Set payRule
     *
     * @param string $payRule
     *
     * @return ThirdParty
     */
    public function setPayRule($payRule)
    {
        $this->payRule = $payRule;

        return $this;
    }

    /**
     * Get payRule
     *
     * @return string
     */
    public function getPayRule()
    {
        return $this->payRule;
    }

    /**
     * Set faxNumber
     *
     * @param string $faxNumber
     *
     * @return ThirdParty
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;

        return $this;
    }

    /**
     * Get faxNumber
     *
     * @return string
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return ThirdParty
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set mobileNumber
     *
     * @param string $mobileNumber
     *
     * @return ThirdParty
     */
    public function setMobileNumber($mobileNumber)
    {
        $this->mobileNumber = $mobileNumber;

        return $this;
    }

    /**
     * Get mobileNumber
     *
     * @return string
     */
    public function getMobileNumber()
    {
        return $this->mobileNumber;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return ThirdParty
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set webPage
     *
     * @param string $webPage
     *
     * @return ThirdParty
     */
    public function setWebPage($webPage)
    {
        $this->webPage = $webPage;

        return $this;
    }

    /**
     * Get webPage
     *
     * @return string
     */
    public function getWebPage()
    {
        return $this->webPage;
    }

    /**
     * Set note
     *
     * @param string $note
     *
     * @return ThirdParty
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

