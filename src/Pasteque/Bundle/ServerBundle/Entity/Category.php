<?php

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Category.
 */
class Category
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
    private $reference;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $image;

    /**
     * @var int
     */
    private $displayOrder;

    /**
     * Category constructor.
     *
     * @param string $reference
     * @param string $name
     * @param string $parentId
     * @param string $image
     * @param int    $displayOrder
     */
    public function __construct($name, $reference, $parentId, $image, $displayOrder = 0)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->reference = $reference;
        $this->parentId = $parentId;
        $this->image = $image;
        $this->displayOrder = $displayOrder;
    }

    /**
     * Get id.
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return Category
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
     * Set reference.
     *
     * @param string $reference
     *
     * @return Category
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference.
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set parentId.
     *
     * @param string $parentId
     *
     * @return Category
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
     * Set image.
     *
     * @param string $image
     *
     * @return Category
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image.
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set displayOrder.
     *
     * @param int $displayOrder
     *
     * @return Category
     */
    public function setDisplayOrder($displayOrder)
    {
        $this->displayOrder = $displayOrder;

        return $this;
    }

    /**
     * Get displayOrder.
     *
     * @return int
     */
    public function getDisplayOrder()
    {
        return $this->displayOrder;
    }
}
