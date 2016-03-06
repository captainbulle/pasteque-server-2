<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxCategory.
 */
class TaxCategory
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
     * @var Tax[]
     */
    private $taxes;

    /**
     * TaxCategory constructor.
     *
     * @param string $name
     * @param string $displayId
     */
    public function __construct($name, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
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
     * @param null $timestamp
     *
     * @return Tax|null
     */
    public function getCurrentTax($timestamp = null)
    {
        /**
         * @var Tax
         */
        $current = null;
        if ($timestamp === null) {
            $timestamp = time();
        }
        foreach ($this->taxes as $tax) {
            if ($tax->isValid($timestamp) && ($current === null || $tax->getStartDate() > $current->getStartDate())) {
                $current = $tax;
            }
        }

        return $current;
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
     * @return TaxCategory
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
     * @return TaxCategory
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
}
