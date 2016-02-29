<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeUse
 */
class AttributeUse{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $attrSetId;

    /**
     * @var string
     */
    private $attrId;

    /**
     * @var int
     */
    private $lineNo;

    /**
     * @param string $attrSetId
     * @param string $attrId
     * @param int $lineNo
     */
    public function __construct($attrSetId, $attrId, $lineNo) {
        $this->id = com_create_guid();
        $this->attrSetId = $attrSetId;
        $this->attrId = $attrId;
        $this->lineNo = $lineNo;
    }

    /**
     * Get id
     * @return int
     */
    public function getId(){
        return $this->id;
    }

    /**
     * Set attrSetId
     * @param string $attrSetId
     * @return AttributeUse
     */
    public function setAttrSetId($attrSetId){
        $this->attrSetId = $attrSetId;
        return $this;
    }

    /**
     * Get attrSetId
     * @return string
     */
    public function getAttrSetId(){
        return $this->attrSetId;
    }

    /**
     * Set attrId
     * @param string $attrId
     * @return AttributeUse
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
     * Set lineNo
     * @param integer $lineNo
     * @return AttributeUse
     */
    public function setLineNo($lineNo){
        $this->lineNo = $lineNo;
        return $this;
    }

    /**
     * Get lineNo
     * @return int
     */
    public function getLineNo(){
        return $this->lineNo;
    }
}

