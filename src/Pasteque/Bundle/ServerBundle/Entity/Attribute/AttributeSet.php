<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeSet.
 */
class AttributeSet
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
     * @var Attribute[]
     */
    private $attributes;

    /**
     * AttributeSet constructor.
     *
     * @param string $name
     * @param string $displayId
     */
    public function __construct($name, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->name = $name;
        $this->attributes = array();
    }

    /**
     * Add an attribute to the array attributes.
     *
     * @param Attribute $attribute
     */
    public function addAttribute($attribute)
    {
        array_push($this->attributes, $attribute);
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
     * @return AttributeSet
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
     * @return AttributeSet
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
     * Get attributes.
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
