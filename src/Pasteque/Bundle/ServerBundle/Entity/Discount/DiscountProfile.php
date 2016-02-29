<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Discount;

/**
 * DiscountProfile
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
    private $dispOrder;

    /**
     * DiscountProfile constructor.
     * @param string $name
     * @param float $rate
     * @param int $dispOrder
     */
    public function __construct($name, $rate, $dispOrder){
        $this->name = $name;
        $this->rate = $rate;
        $this->dispOrder = $dispOrder;
    }

    /**
     * Get id
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set name
     * @param string $name
     * @return DiscountProfile
     */
    public function setName($name){
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * Set rate
     * @param float $rate
     * @return DiscountProfile
     */
    public function setRate($rate){
        $this->rate = $rate;
        return $this;
    }

    /**
     * Get rate
     * @return float
     */
    public function getRate(){
        return $this->rate;
    }

    /**
     * Set dispOrder
     * @param integer $dispOrder
     * @return DiscountProfile
     */
    public function setDispOrder($dispOrder){
        $this->dispOrder = $dispOrder;
        return $this;
    }

    /**
     * Get dispOrder
     * @return int
     */
    public function getDispOrder(){
        return $this->dispOrder;
    }
}

