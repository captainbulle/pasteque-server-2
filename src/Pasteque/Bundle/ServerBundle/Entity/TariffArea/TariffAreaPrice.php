<?php

namespace Pasteque\Bundle\ServerBundle\Entity\TariffArea;

/**
 * TariffAreaPrice
 */
class TariffAreaPrice
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var float
     */
    private $priceSell;

    /**
     * TariffAreaPrice constructor.
     * @param string $productId
     * @param float $priceSell
     */
    public function __construct($productId, $priceSell)
    {
        $this->productId = $productId;
        $this->priceSell = $priceSell;
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
     * Set productId
     *
     * @param string $productId
     *
     * @return TariffAreaPrice
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set priceSell
     *
     * @param float $priceSell
     *
     * @return TariffAreaPrice
     */
    public function setPriceSell($priceSell)
    {
        $this->priceSell = $priceSell;

        return $this;
    }

    /**
     * Get priceSell
     *
     * @return float
     */
    public function getPriceSell()
    {
        return $this->priceSell;
    }
}

