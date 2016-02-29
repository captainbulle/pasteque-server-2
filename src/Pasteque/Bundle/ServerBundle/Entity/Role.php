<?php

namespace Pasteque\Bundle\ServerBundle\Entity;

/**
 * Role
 */
class Role
{
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
    private $permissions;

    /**
     * @param string $name
     * @param string $permissions
     */
    public function __construct($name, $permissions){
        $this->id = com_create_guid();
        $this->name = $name;
        $this->permissions = $permissions;
    }

    /**
     * @param string $permission
     * @return bool
     */
    function hasPermission($permission) {
        return (strstr($this->permissions, $permission) !== false);
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
     * @return Role
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
     * Set permissions
     * @param string $permissions
     * @return Role
     */
    public function setPermissions($permissions){
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Get permissions
     * @return string
     */
    public function getPermissions(){
        return $this->permissions;
    }
}

