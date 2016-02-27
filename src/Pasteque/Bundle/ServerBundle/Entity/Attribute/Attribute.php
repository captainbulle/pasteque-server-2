<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * Attribute
 */
class Attribute{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var array
     */
    private $values;

    /**
     * @var string
     */
    private $dispOrder;

    /**
     * Attribute constructor.
     * @param string $name
     * @param string $dispOrder
     */
    private function __construct($name, $dispOrder){
        $this->id = com_create_guid();
        $this->name = $name;
        $this->dispOrder = $dispOrder;
        $this->values = array();
    }

    /**
     * @param string $value
     */
    public function addValue($value){
        array_push($this->values, $value);
    }

    /**
     * Get id
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set name
     * @param string $name
     * @return Attribute
     */
    public function setName($name){
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    /**
     * GetValues
     * @return array
     */
    public function getValues(){
        return $this->values;
    }

    /**
     * Set dispOrder
     * @param string $dispOrder
     * @return Attribute
     */
    public function setDispOrder($dispOrder){
        $this->dispOrder = $dispOrder;
        return $this;
    }

    /**
     * Get dispOrder
     * @return string
     */
    public function getDispOrder(){
        return $this->dispOrder;
    }
}

