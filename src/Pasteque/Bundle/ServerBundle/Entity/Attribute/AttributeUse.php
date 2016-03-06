<?php

namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;

/**
 * AttributeUse.
 */
class AttributeUse
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
    private $attrId;

    /**
     * @var int
     */
    private $lineNo;

    /**
     * AttributeUse constructor.
     *
     * @param string $attrSetId
     * @param string $attrId
     * @param int    $lineNo
     * @param string $displayId
     */
    public function __construct($attrSetId, $attrId, $lineNo, $displayId = null)
    {
        $this->displayId = ($displayId === null ? com_create_guid() : $displayId);
        $this->attrSetId = $attrSetId;
        $this->attrId = $attrId;
        $this->lineNo = $lineNo;
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
     * @return AttributeUse
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
     * @return AttributeUse
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
     * Set attrId.
     *
     * @param string $attrId
     *
     * @return AttributeUse
     */
    public function setAttrId($attrId)
    {
        $this->attrId = $attrId;

        return $this;
    }

    /**
     * Get attrId.
     *
     * @return string
     */
    public function getAttrId()
    {
        return $this->attrId;
    }

    /**
     * Set lineNo.
     *
     * @param int $lineNo
     *
     * @return AttributeUse
     */
    public function setLineNo($lineNo)
    {
        $this->lineNo = $lineNo;

        return $this;
    }

    /**
     * Get lineNo.
     *
     * @return int
     */
    public function getLineNo()
    {
        return $this->lineNo;
    }
}
