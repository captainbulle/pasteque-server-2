<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * Tax.
 */
class Tax
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
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var string
     */
    private $taxCategoryId;

    /**
     * @var string
     */
    private $taxCustomerCategoryId;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var float
     */
    private $rate;

    /**
     * @var bool
     */
    private $rateCascade;

    /**
     * @var int
     */
    private $rateOrder;

    /**
     * Tax constructor.
     *
     * @param string    $name
     * @param \DateTime $startDate
     * @param string    $taxCategoryId
     * @param string    $taxCustomerCategoryId
     * @param string    $parentId
     * @param float     $rate
     * @param int       $rateOrder
     * @param bool      $rateCascade
     * @param string    $displayId
     */
    public function __construct($name, \DateTime $startDate, $taxCategoryId, $taxCustomerCategoryId, $parentId,
                                $rate, $rateOrder, $rateCascade = false, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->startDate = $startDate;
        $this->taxCategoryId = $taxCategoryId;
        $this->taxCustomerCategoryId = $taxCustomerCategoryId;
        $this->parentId = $parentId;
        $this->rate = $rate;
        $this->rateOrder = $rateOrder;
        $this->rateCascade = $rateCascade;
    }

    /**
     * Check if this tax is valid at a given date.
     *
     * @param \DateTime $date (optional)
     *
     * @return bool
     */
    public function isValid(\DateTime $date = null)
    {
        return \DateTime::createFromFormat('m/d/Y', $date) !== false;
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
     * @return Tax
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
     * @return Tax
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
     * Set startDate.
     *
     * @param \DateTime $startDate
     *
     * @return Tax
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate.
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set taxCategoryId.
     *
     * @param string $taxCategoryId
     *
     * @return Tax
     */
    public function setTaxCategoryId($taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;

        return $this;
    }

    /**
     * Get taxCategoryId.
     *
     * @return string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }

    /**
     * Set taxCustomerCategoryId.
     *
     * @param string $taxCustomerCategoryId
     *
     * @return Tax
     */
    public function setTaxCustomerCategoryId($taxCustomerCategoryId)
    {
        $this->taxCustomerCategoryId = $taxCustomerCategoryId;

        return $this;
    }

    /**
     * Get taxCustomerCategoryId.
     *
     * @return string
     */
    public function getTaxCustomerCategoryId()
    {
        return $this->taxCustomerCategoryId;
    }

    /**
     * Set parentId.
     *
     * @param string $parentId
     *
     * @return Tax
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId.
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set rate.
     *
     * @param float $rate
     *
     * @return Tax
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
     * Set rateCascade.
     *
     * @param bool $rateCascade
     *
     * @return Tax
     */
    public function setRateCascade($rateCascade)
    {
        $this->rateCascade = $rateCascade;

        return $this;
    }

    /**
     * Get rateCascade.
     *
     * @return bool
     */
    public function getRateCascade()
    {
        return $this->rateCascade;
    }

    /**
     * Set rateOrder.
     *
     * @param int $rateOrder
     *
     * @return Tax
     */
    public function setRateOrder($rateOrder)
    {
        $this->rateOrder = $rateOrder;

        return $this;
    }

    /**
     * Get rateOrder.
     *
     * @return int
     */
    public function getRateOrder()
    {
        return $this->rateOrder;
    }
}
