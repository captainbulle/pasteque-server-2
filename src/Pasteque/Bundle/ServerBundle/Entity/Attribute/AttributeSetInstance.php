<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeSetInstance.
 */
class AttributeSetInstance
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $displayId;

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
     * @param string $displayId
     */
    public function __construct($attrSetId, $description= null, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
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
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set displayId.
     *
     * @param string $displayId
     *
     * @return AttributeSetInstance
     */
    public function setDisplayId($displayId)
    {
        $this->displayId = $displayId;

        return $this;
    }

    /**
     * Get displayId.
     *
     * @return string
     */
    public function getDisplayId()
    {
        return $this->displayId;
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
