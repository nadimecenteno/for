<?php

class Member{

    private $id;
    private $name;
    private $role;
    private $companyId;

    public function __construct($name, $role, $companyId){
        $this->name = $name;
        $this->role = $role;
        $this->$companyId = $companyId;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getRole(){
        return $this->role;
    }

    public function getCompanyId(){
        return $this->companyId;
    }

    public function setName($name){
        return $this->name = $name;
    }

    public function setRole($role){
        return $this->role = $role;
    }
    public function setCompanyId($companyId){
        return $this->companyId = $companyId;
    }


}