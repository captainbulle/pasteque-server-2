<?php

namespace Pasteque\Bundle\ServerBundle\Entity\TariffArea;

/**
 * TariffArea
 */
class TariffArea
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
     * @var int
     */
    private $displayOrder;

    /**
     * @var string
     */
    private $note;

    /**
     * @var TariffAreaPrice[]
     */
    private $tariffAreaPrices;

    /**
     * TariffArea constructor.
     * @param string $name
     * @param int $displayOrder
     * @param string $note
     */
    public function __construct($name, $displayOrder=0, $note=null)
    {
        $this->name = $name;
        $this->displayOrder = $displayOrder;
        $this->note = $note;
        $this->tariffAreaPrices = array();
    }

    /**
     * @param string $productId
     * @param float $price
     */
    function addTariffAreaPrice($productId, $price) {
        array_push($this->tariffAreaPrices, new TariffAreaPrice($productId, $price));
    }

    /**
     * @param string $productId
     * @return float|null
     */
    function getPrice($productId) {
        foreach ($this->tariffAreaPrices as $price) {
            if ($price->getProductId() == $productId) {
                return $price->getPrice();
            }
        }
        return null;
    }

    /**
     * @return TariffAreaPrice[]
     */
    function getPrices() {
        return $this->tariffAreaPrices;
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
     * @return TariffArea
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
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return TariffArea
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
     * Set note
     *
     * @param string $note
     *
     * @return TariffArea
     */
    public function setNote($note)
    {
        $this->note = $note;

        return $this;
    }

    /**
     * Get note
     *
     * @return string
     */
    public function getNote()
    {
        return $this->note;
    }
}

