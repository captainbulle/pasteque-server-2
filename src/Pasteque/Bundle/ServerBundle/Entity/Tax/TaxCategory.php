<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Tax;

/**
 * TaxCategory
 */
class TaxCategory
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
     * @var Tax[]
     */
    private $taxes;

    /**
     * TaxCategory constructor.
     * @param string $name
     */
    public function __construct($name)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->taxes = array();
    }

    /**
     * @param Tax $tax
     */
    public function addTax(Tax $tax) {
        array_push($this->taxes, $tax);
    }

    /**
     * @param null $timestamp
     * @return Tax|null
     */
    public function getCurrentTax($timestamp = null) {
        /**
         * @var Tax $current
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
     * @return TaxCategory
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
}

