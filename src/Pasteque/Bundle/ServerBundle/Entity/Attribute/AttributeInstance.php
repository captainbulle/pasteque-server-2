<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeInstance
 */
class AttributeInstance{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $attrSetInstId;

    /**
     * @var string
     */
    private $attrId;

    /**
     * @var string
     */
    private $value;

    /**
     * AttributeInstance constructor.
     * @param string $attrSetInstId
     * @param string $attrId
     * @param string $value
     */
    public function __construct($attrSetInstId, $attrId, $value) {
        $this->id = com_create_guid();
        $this->attrSetInstId = $attrSetInstId;
        $this->attrId = $attrId;
        $this->value = $value;
    }

    /**
     * Get id
     * @return string
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set attrSetInstId
     * @param string $attrSetInstId
     * @return AttributeInstance
     */
    public function setAttrSetInstId($attrSetInstId){
        $this->attrSetInstId = $attrSetInstId;
        return $this;
    }

    /**
     * Get attrSetInstId
     * @return string
     */
    public function getAttrSetInstId(){
        return $this->attrSetInstId;
    }

    /**
     * Set attrId
     * @param string $attrId
     * @return AttributeInstance
     */
    public function setAttrId($attrId){
        $this->attrId = $attrId;
        return $this;
    }

    /**
     * Get attrId
     * @return string
     */
    public function getAttrId(){
        return $this->attrId;
    }

    /**
     * Set value
     * @param string $value
     * @return AttributeInstance
     */
    public function setValue($value){
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     * @return string
     */
    public function getValue(){
        return $this->value;
    }
}

