<?php

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Floor.
 */
class Floor
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
    private $image;

    /**
     * @var Place[]
     */
    private $places;

    /**
     * @param string $name
     * @param string $image
     */
    public function __construct($name, $image = null)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->image = $image;
        $this->places = array();
    }

    /**
     * @param Place $place
     */
    public function addPlace(Place $place)
    {
        array_push($this->places, $place);
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
     * @return Floor
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
     * Set image.
     *
     * @param string $image
     *
     * @return Floor
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
     * Get places.
     *
     * @return array
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Set places.
     *
     * @param array $places
     *
     * @return Floor
     */
    public function setPlaces($places)
    {
        $this->places = $places;

        return $this;
    }
}
