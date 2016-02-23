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

    private static $attribute;
    private $values;
    private $dispOrder;

    public static function __build($name, $dispOrder){
        if(null == static::$attribute){
            static::$attribute = new static($name, $dispOrder);
        }
        //$attribute = new Attribute($name,$dispOrder);
        //$attribute->setId(com_create_guid());
        return static::$attribute;
    }

    private function __construct($name, $dispOrder){
        $this->id = com_create_guid();
        $this->name = $name;
        $this->dispOrder = $dispOrder;
        $this->values = array();
    }

    public function addValue($value){
        array_push($this->values, $value);
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Attribute
     */
    public function setName($name){
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(){
        return $this->name;
    }

    public function getValues(){
        return $this->values;
    }

    public function setDispOrder($dispOrder){
        $this->dispOrder = $dispOrder;
    }

    public function getDispOrder(){
        return $this->dispOrder;
    }
}

