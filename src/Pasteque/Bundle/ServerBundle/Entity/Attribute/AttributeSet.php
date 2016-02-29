<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeSet
 */
class AttributeSet{
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
    private $attributes;

    /**
     * @param string $name
     */
    public function __construct($name) {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->attributes = array();
    }

    /**
     * @param string $attribute
     */
    public function addAttribute($attribute) {
        array_push($this->attributes, $attribute);
    }

    /**
     * Get id
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set name
     * @param string $name
     * @return AttributeSet
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
     * Get attributes
     * @return array
     */
    public function getAttributes(){
        return $this->attributes;
    }
}

