<?php
namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * AttributeValue
 */
class AttributeValue{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $value;

    public static function __build($value){
        $attr_val = new AttributeValue($value);
        return $attr_val;
    }

    public function __construct($value){
        $this->id = com_create_guid();
        $this->value = $value;
    }

    /**
     * Get id
     *
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AttributeValue
     */
    public function setValue($value){
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue(){
        return $this->value;
    }
}

