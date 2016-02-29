<?php
namespace Pasteque\Bundle\ServerBundle\Entity\Attribute;
use Symfony\Component\Validator\Constraints\DateTime;

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
     * @var string
     */
    private $active;

    /**
     * @var \DateTime
     */
    private $addedDate;

    /**
     * @var string
     */
    private $addedBy;

    /**
     * @var \DateTime
     */
    private $updatedDate;

    /**
     * @var string
     */
    private $updatedBy;

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
     * @param \Pasteque\Bundle\ServerBundle\Entity\User\User $user
     */
    private function __construct($name, $dispOrder, $user){
        $this->id = com_create_guid();
        $this->name = $name;
        $this->dispOrder = $dispOrder;
        $this->active = 'A';
        $this->addedDate = new DateTime();
        $this->addedBy = $user->getName();
        $this->updatedDate = new DateTime();
        $this->updatedBy = $user->getName();
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
     * Get Values
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

    /**
     * Set active
     * @param string $active
     * @return Attribute
     */
    public function setActive($active){
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     * @return string
     */
    public function getActive(){
        return $this->active;
    }

    /**
     * Set addedDate
     * @param \DateTime $addedDate
     * @return Attribute
     */
    public function setAddedDate($addedDate){
        $this->addedDate = $addedDate;
        return $this;
    }

    /**
     * Get addedDate
     * @return \DateTime
     */
    public function getAddedDate(){
        return $this->addedDate;
    }

    /**
     * Set addedBy
     * @param string $addedBy
     * @return Attribute
     */
    public function setAddedBy($addedBy){
        $this->addedBy = $addedBy;
        return $this;
    }

    /**
     * Get addedBy
     * @return string
     */
    public function getAddedBy(){
        return $this->addedBy;
    }

    /**
     * Set updatedDate
     * @param \DateTime $updatedDate
     * @return Attribute
     */
    public function setUpdatedDate($updatedDate){
        $this->updatedDate = $updatedDate;
        return $this;
    }

    /**
     * Get updatedDate
     * @return \DateTime
     */
    public function getUpdatedDate(){
        return $this->updatedDate;
    }

    /**
     * Set updatedBy
     * @param string $updatedBy
     * @return Attribute
     */
    public function setUpdatedBy($updatedBy){
        $this->updatedBy = $updatedBy;
        return $this;
    }

    /**
     * Get updatedBy
     * @return string
     */
    public function getUpdatedBy(){
        return $this->updatedBy;
    }
}

