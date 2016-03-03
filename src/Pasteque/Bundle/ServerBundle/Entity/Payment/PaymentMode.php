<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Payment;

/**
 * PaymentMode
 */
class PaymentMode
{
    /** Requires a customer */
    const CUST_ASSIGNED = 1;
    /** Uses customer's debt (includes CUST_ASSIGNED) */
    const CUST_DEBT = 3; // 2 + PaymentMode::CUST_ASSIGNED
    /** Uses customer's prepaid (includes CUST_ASSIGNED) */
    const CUST_PREPAID = 5; // 4 + PaymentMode::CUST_ASSIGNED;

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string
     */
    private $backName;

    /**
     * @var int
     */
    private $flags;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var bool
     */
    private $active;

    /**
     * If system, it cannot be deleted
     * @var bool
     */
    private $system;

    /**
     * Rules define how exceedent must be treated. It's an array of PaymentModeRule ordered by minVal ASC.
     * @var Rule[]
     */
    private $rules;

    /**
     * Optional pre-defined values to pick
     * @var array
     */
    private $values;

    /**
     * PaymentMode constructor.
     * @param string $name
     * @param string $code
     * @param string $backName
     * @param int $flags
     * @param string $image
     * @param array $rules
     * @param array $values
     * @param int $displayOrder
     * @param bool $system
     */
    public function __construct($name, $code, $backName, $flags, $image, array $rules, array $values, $displayOrder=0, $system=false)
    {
        $this->name = $name;
        $this->code = $code;
        $this->backName = $backName;
        $this->flags = $flags;
        $this->image = $image;
        $this->rules = $rules;
        $this->values = $values;
        $this->displayOrder = $displayOrder;
        $this->system = $system;
        $this->active = true;
    }

    /**
     * @param $value
     */
    public function addValue($value){
        array_push($this->values, $value);
    }

    /**
     * @param $rule
     */
    public function addRule($rule){
        array_push($this->rules, $rule);
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
     * @return PaymentMode
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
     * Set code
     *
     * @param string $code
     *
     * @return PaymentMode
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * Set backName
     *
     * @param string $backName
     *
     * @return PaymentMode
     */
    public function setBackName($backName)
    {
        $this->backName = $backName;

        return $this;
    }

    /**
     * Get backName
     *
     * @return string
     */
    public function getBackName()
    {
        return $this->backName;
    }

    /**
     * Set flags
     *
     * @param integer $flags
     *
     * @return PaymentMode
     */
    public function setFlags($flags)
    {
        $this->flags = $flags;

        return $this;
    }

    /**
     * Get flags
     *
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return PaymentMode
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
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return PaymentMode
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
     * Set active
     *
     * @param boolean $active
     *
     * @return PaymentMode
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return bool
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set system
     *
     * @param boolean $system
     *
     * @return PaymentMode
     */
    public function setSystem($system)
    {
        $this->system = $system;

        return $this;
    }

    /**
     * Get system
     *
     * @return bool
     */
    public function getSystem()
    {
        return $this->system;
    }
}

