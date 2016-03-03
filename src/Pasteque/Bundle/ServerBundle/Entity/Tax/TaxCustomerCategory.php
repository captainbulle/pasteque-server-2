<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxCustomerCategory
 */
class TaxCustomerCategory
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $taxCategoryId;

    /**
     * @var Tax[]
     */
    private $taxes;

    /**
     * TaxCustomerCategory constructor.
     * @param string $name
     * @param string $taxCategoryId
     */
    public function __construct($name, $taxCategoryId=null)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->taxCategoryId = $taxCategoryId;
        $this->taxes = array();
    }

    /**
     * @param Tax $tax
     */
    public function addTax(Tax $tax) {
        array_push($this->taxes, $tax);
    }

    /**
     * Get id
     *
     * @return string
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
     * @return TaxCustomerCategory
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
     * Set taxCategoryId
     *
     * @param string $taxCategoryId
     *
     * @return TaxCustomerCategory
     */
    public function setTaxCategoryId($taxCategoryId)
    {
        $this->taxCategoryId = $taxCategoryId;

        return $this;
    }

    /**
     * Get taxCategoryId
     *
     * @return string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }
}

