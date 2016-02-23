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

    private $attributes;

    public static function __build($name) {
        $set = new AttributeSet($name);
        return $set;
    }

    public function __construct($name) {
        $this->id = com_create_guid();
        $this->name = $name;
        $this->attributes = array();
    }

    public function addAttribute($attribute) {
        array_push($this->attributes, $attribute);
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
     * Set name
     *
     * @param string $name
     *
     * @return AttributeSet
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

    public function getAttributes(){
        return $this->attributes;
    }
}

