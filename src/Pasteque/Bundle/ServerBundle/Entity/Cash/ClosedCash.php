<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Cash;

/**
 * ClosedCash
 */
class ClosedCash{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $money;

    /**
     * @var int
     */
    private $cashRegisterId;

    /**
     * @var int
     */
    private $hostSequence;

    /**
     * @var \DateTime
     */
    private $openDate; // DateStart in database

    /**
     * @var \DateTime
     */
    private $closeDate; // DateEnd in database

    /**
     * @var float
     */
    private $openCash;

    /**
     * @var float
     */
    private $closeCash;

    /**
     * @var float
     */
    private $expectedCash;

    /** Optionnal tickets count */
    //private $tickets;
    /** Optionnal total */
    //private $total;

    public static function __build($money, $cashRegisterId, $hostSequence, $openDate, $closeDate, $openCash, $closeCash, $expectedCash) {
        $closedCash = new ClosedCash($money, $cashRegisterId, $hostSequence, $openDate, $closeDate, $openCash, $closeCash, $expectedCash);
        return $closedCash;
    }

    public function __construct($money, $cashRegisterId, $hostSequence, $openDate, $closeDate, $openCash, $closeCash, $expectedCash) {
        $this->money = $money;
        $this->cashRegisterId = $cashRegisterId;
        $this->hostSequence = (int) $hostSequence;
        $this->openDate = $openDate;
        $this->closeDate = $closeDate;
        $this->openCash = $openCash;
        $this->closeCash = $closeCash;
        $this->expectedCash = $expectedCash;
    }

    function isClosed() {
        return $this->closeDate != null;
    }

    function isOpened() {
        return $this->openDate != null;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set money
     *
     * @param string $money
     *
     * @return ClosedCash
     */
    public function setMoney($money){
        $this->money = $money;
        return $this;
    }

    /**
     * Get money
     *
     * @return string
     */
    public function getMoney(){
        return $this->money;
    }

    /**
     * Set cashRegisterId
     *
     * @param int $cashRegisterId
     *
     * @return ClosedCash
     */
    public function setCashRegisterId($cashRegisterId){
        $this->cashRegisterId = $cashRegisterId;
        return $this;
    }

    /**
     * Get cashRegisterId
     *
     * @return int
     */
    public function getCashRegisterId(){
        return $this->cashRegisterId;
    }

    /**
     * Set hostSequence
     *
     * @param integer $hostSequence
     *
     * @return ClosedCash
     */
    public function setHostSequence($hostSequence){
        $this->hostSequence = $hostSequence;
        return $this;
    }

    /**
     * Get hostSequence
     *
     * @return int
     */
    public function getHostSequence(){
        return $this->hostSequence;
    }

    /**
     * Set openDate
     *
     * @param \DateTime $openDate
     *
     * @return ClosedCash
     */
    public function setOpenDate($openDate){
        $this->openDate = $openDate;
        return $this;
    }

    /**
     * Get openDate
     *
     * @return \DateTime
     */
    public function getOpenDate(){
        return $this->openDate;
    }

    /**
     * Set closeDate
     *
     * @param \DateTime $closeDate
     *
     * @return ClosedCash
     */
    public function setCloseDate($closeDate){
        $this->closeDate = $closeDate;
        return $this;
    }

    /**
     * Get closeDate
     *
     * @return \DateTime
     */
    public function getCloseDate(){
        return $this->closeDate;
    }

    /**
     * Set openCash
     *
     * @param float $openCash
     *
     * @return ClosedCash
     */
    public function setOpenCash($openCash){
        $this->openCash = $openCash;
        return $this;
    }

    /**
     * Get openCash
     *
     * @return float
     */
    public function getOpenCash(){
        return $this->openCash;
    }

    /**
     * Set closeCash
     *
     * @param float $closeCash
     *
     * @return ClosedCash
     */
    public function setCloseCash($closeCash){
        $this->closeCash = $closeCash;
        return $this;
    }

    /**
     * Get closeCash
     *
     * @return float
     */
    public function getCloseCash(){
        return $this->closeCash;
    }

    /**
     * Set expectedCash
     *
     * @param float $expectedCash
     *
     * @return ClosedCash
     */
    public function setExpectedCash($expectedCash){
        $this->expectedCash = $expectedCash;
        return $this;
    }

    /**
     * Get expectedCash
     *
     * @return float
     */
    public function getExpectedCash(){
        return $this->expectedCash;
    }
}

