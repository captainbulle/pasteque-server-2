<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxCustomerCategory.
 */
class TaxCustomerCategory
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
    private $taxCategoryId;

    /**
     * @var Tax[]
     */
    private $taxes;

    /**
     * TaxCustomerCategory constructor.
     *
     * @param string $name
     * @param string $taxCategoryId
     * @param string $displayId
     */
    public function __construct($name, $taxCategoryId = null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->taxCategoryId = $taxCategoryId;
        $this->taxes = array();
    }

    /**
     * @param Tax $tax
     */
    public function addTax(Tax $tax)
    {
        array_push($this->taxes, $tax);
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
     * @return TaxCustomerCategory
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
     * @return TaxCustomerCategory
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
     * Set taxCategoryId.
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
     * Get taxCategoryId.
     *
     * @return string
     */
    public function getTaxCategoryId()
    {
        return $this->taxCategoryId;
    }
}
