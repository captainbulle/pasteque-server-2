<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Discount;

/**
 * Discount
 */
class Discount
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
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var string
     */
    private $barcode;

    /**
     * @var int
     */
    private $barcodeType;

    /**
     * @var int
     */
    private $dispOrder;

    /**
     * Discount constructor.
     * @param string $name
     * @param \DateTime $startDate
     * @param \DateTime $endDate
     * @param float $rate
     * @param string $barcode
     * @param int $barcodeType
     * @param int $dispOrder
     */
    public function __construct($name, $startDate, $endDate, $rate, $barcode, $barcodeType, $dispOrder){
        $this->name = $name;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->rate = $rate;
        $this->barcode = $barcode;
        $this->barcodeType = $barcodeType;
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
     * @return Discount
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
     * Set startDate
     * @param \DateTime $startDate
     * @return Discount
     */
    public function setStartDate($startDate){
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     * @return \DateTime
     */
    public function getStartDate(){
        return $this->startDate;
    }

    /**
     * Set endDate
     * @param \DateTime $endDate
     * @return Discount
     */
    public function setEndDate($endDate){
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     * @return \DateTime
     */
    public function getEndDate(){
        return $this->endDate;
    }

    /**
     * Set rate
     * @param float $rate
     * @return Discount
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
     * Set barcode
     * @param string $barcode
     * @return Discount
     */
    public function setBarcode($barcode){
        $this->barcode = $barcode;
        return $this;
    }

    /**
     * Get barcode
     * @return string
     */
    public function getBarcode(){
        return $this->barcode;
    }

    /**
     * Set barcodeType
     * @param integer $barcodeType
     * @return Discount
     */
    public function setBarcodeType($barcodeType){
        $this->barcodeType = $barcodeType;
        return $this;
    }

    /**
     * Get barcodeType
     * @return int
     */
    public function getBarcodeType(){
        return $this->barcodeType;
    }

    /**
     * Set dispOrder
     * @param integer $dispOrder
     * @return Discount
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

