<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Group;

/**
 * SubGroupProduct
 */
class SubGroupProduct
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $subGroupId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * SubGroupProduct constructor.
     * @param int $subGroupId
     * @param string $productId
     * @param int $displayOrder
     */
    public function __construct($subGroupId, $productId, $displayOrder=null)
    {
        $this->subGroupId = $subGroupId;
        $this->productId = $productId;
        $this->displayOrder = $displayOrder;
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
     * Set subGroupId
     *
     * @param integer $subGroupId
     *
     * @return SubGroupProduct
     */
    public function setSubGroupId($subGroupId)
    {
        $this->subGroupId = $subGroupId;

        return $this;
    }

    /**
     * Get subGroupId
     *
     * @return int
     */
    public function getSubGroupId()
    {
        return $this->subGroupId;
    }

    /**
     * Set productId
     *
     * @param string $productId
     *
     * @return SubGroupProduct
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
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return SubGroupProduct
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
}

