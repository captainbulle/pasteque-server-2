<?php

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Provider.
 */
class Provider
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
     * @var string
     */
    private $image;

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
    private $city;

    /**
     * @var string
     */
    private $region;

    /**
     * @var string
     */
    private $country;

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
    private $website;

    /**
     * @var string
     */
    private $fax;

    /**
     * @var string
     */
    private $notes;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var bool
     */
    private $visible;

    /**
     * @param string $name
     * @param string $image
     * @param string $address
     * @param string $address2
     * @param string $postal
     * @param string $city
     * @param string $region
     * @param string $country
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $phone
     * @param string $phone2
     * @param string $website
     * @param string $fax
     * @param string $notes
     * @param int    $displayOrder
     * @param string $displayId
     */
    public function __construct($name, $image, $address, $address2, $postal, $city, $region, $country, $firstname,
                                $lastname, $email, $phone, $phone2, $website, $fax, $notes,
                                $displayOrder = 0, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->image = $image;
        $this->address = $address;
        $this->address2 = $address2;
        $this->postal = $postal;
        $this->city = $city;
        $this->region = $region;
        $this->country = $country;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->phone = $phone;
        $this->phone2 = $phone2;
        $this->website = $website;
        $this->fax = $fax;
        $this->notes = $notes;
        $this->displayOrder = $displayOrder;
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
     * @return Provider
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
     * @return Provider
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
     * Set image.
     *
     * @param string $image
     *
     * @return Provider
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
     * Set address.
     *
     * @param string $address
     *
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * Set city.
     *
     * @param string $city
     *
     * @return Provider
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set region.
     *
     * @param string $region
     *
     * @return Provider
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
     * @return Provider
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
     * Set firstname.
     *
     * @param string $firstname
     *
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * @return Provider
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
     * Set website.
     *
     * @param string $website
     *
     * @return Provider
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website.
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set fax.
     *
     * @param string $fax
     *
     * @return Provider
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
     * Set notes.
     *
     * @param string $notes
     *
     * @return Provider
     */
    public function setNotes($notes)
    {
        $this->notes = $notes;

        return $this;
    }

    /**
     * Get notes.
     *
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return Provider
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }

    /**
     * Set visible.
     *
     * @param bool $visible
     *
     * @return Provider
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
