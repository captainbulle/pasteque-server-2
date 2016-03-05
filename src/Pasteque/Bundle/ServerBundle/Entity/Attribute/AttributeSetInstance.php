<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeSetInstance.
 */
class AttributeSetInstance
{
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
    private $description;

    /**
     * @var AttributeInstance[]
     */
    private $attrInsts;

    /**
     * AttributeSetInstance constructor.
     *
     * @param string $attrSetId
     * @param string $description
     */
    public function __construct($attrSetId, $description)
    {
        $this->id = com_create_guid();
        $this->attrSetId = $attrSetId;
        $this->description = $description;
        $this->attrInsts = array();
    }

    /**
     * Add an instance of attribute in the array attrInsts.
     *
     * @param $attrInst
     */
    public function addAttrInst($attrInst)
    {
        array_push($this->attrInsts, $attrInst);
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
     * Set attrSetId.
     *
     * @param string $attrSetId
     *
     * @return AttributeSetInstance
     */
    public function setAttrSetId($attrSetId)
    {
        $this->attrSetId = $attrSetId;

        return $this;
    }

    /**
     * Get attrSetId.
     *
     * @return string
     */
    public function getAttrSetId()
    {
        return $this->attrSetId;
    }

    /**
     * Set description.
     *
     * @param string $description
     *
     * @return AttributeSetInstance
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get value.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get attrInsts.
     *
     * @return array
     */
    public function getAttrInsts()
    {
        return $this->attrInsts;
    }
}
