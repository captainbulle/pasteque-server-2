<?php

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Place.
 */
class Place
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
     * @var int
     */
    private $x;

    /**
     * @var int
     */
    private $y;

    /**
     * @var string
     */
    private $floorId;

    /**
     * Place constructor.
     *
     * @param string $name
     * @param int    $x
     * @param int    $y
     * @param string $floorId
     */
    public function __construct($name, $x, $y, $floorId)
    {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->x = $x;
        $this->y = $y;
        $this->floorId = $floorId;
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
     * @return Place
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
     * Set x.
     *
     * @param int $x
     *
     * @return Place
     */
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get x.
     *
     * @return int
     */
    public function getX()
    {
        return $this->x;
    }

    /**
     * Set y.
     *
     * @param int $y
     *
     * @return Place
     */
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Get y.
     *
     * @return int
     */
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set floorId.
     *
     * @param string $floorId
     *
     * @return Place
     */
    public function setFloorId($floorId)
    {
        $this->floorId = $floorId;

        return $this;
    }

    /**
     * Get floorId.
     *
     * @return string
     */
    public function getFloorId()
    {
        return $this->floorId;
    }
}
