<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Group;

/**
 * SubGroup
 */
class SubGroup
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $compositionId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var bool
     */
    private $required;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * @var SubGroupProduct[]
     */
    private $subGroupProducts;

    /**
     * SubGroup constructor.
     * @param int $compositionId
     * @param string $name
     * @param bool $required
     * @param string $image
     * @param int $displayOrder
     */
    public function __construct($compositionId, $name, $required=true, $image=null, $displayOrder=0)
    {
        $this->compositionId = $compositionId;
        $this->name = $name;
        $this->required = $required;
        $this->image = $image;
        $this->displayOrder = $displayOrder;
        $this->subGroupProducts = array();
    }


    /**
     * @param SubGroupProduct $subGroupProduct
     */
    public function addSubGroupProduct($subGroupProduct) {
        array_push($this->subGroupProducts, $subGroupProduct);
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
     * Set compositionId
     *
     * @param integer $compositionId
     *
     * @return SubGroup
     */
    public function setCompositionId($compositionId)
    {
        $this->compositionId = $compositionId;

        return $this;
    }

    /**
     * Get compositionId
     *
     * @return int
     */
    public function getCompositionId()
    {
        return $this->compositionId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return SubGroup
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
     * Set required
     *
     * @param boolean $required
     *
     * @return SubGroup
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return SubGroup
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set displayOrder
     *
     * @param integer $displayOrder
     *
     * @return SubGroup
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

