<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Discount;

/**
 * DiscountProfile.
 */
class DiscountProfile
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
     * @var float
     */
    private $rate;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * DiscountProfile constructor.
     *
     * @param string $name
     * @param float  $rate
     * @param int    $displayOrder
     */
    public function __construct($name, $rate, $displayOrder = 0)
    {
        $this->name = $name;
        $this->rate = $rate;
        $this->displayOrder = $displayOrder;
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
     * Set name.
     *
     * @param string $name
     *
     * @return DiscountProfile
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
     * Set rate.
     *
     * @param float $rate
     *
     * @return DiscountProfile
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate.
     *
     * @return float
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return DiscountProfile
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
}
