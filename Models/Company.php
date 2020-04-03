<?php

//namespace models;

class Company{
    private $id;
    private $name;
    private $federation;

    public static function create($name, $federation){
        $connection = Connection::getConnection();
        $exist = "select * from companys where name = '{$name}'";
        if(mysqli_num_rows($exist) == 0){
            $query = "insert into companys (name, federation) values ('{$name}', '{$federation}')";
            $result = mysqli_query($connection, $query);
        }
    }

    public static function all(){
        $connection = Connection::getConnection();
        $query = "select * from companys";
        $result = mysqli_query($connection, $query);
        $companys;
        for ($i=0; $i < mysqli_num_rows($result); $i++) { 
            $company = mysqli_fetch_assoc($result);
            $companys[$i] = new Company($company['id'], $company['name'], $company['federation']);
        }
        return $companys;
    }

    public function update($id, $name, $federation){
        $connection = Connection::getConnection();
        $query = "update companys set name = '{$name}', federation = '{$federation}' where id = '{$id}'";
        $result = mysqli_query($connection, $query);
    }

    public function delete($id){
        $connection = Connection::getConnection();
        $query = "delete from companys where id = '{$id}'";
        $result = mysqli_query($connection, $query);
    }

    public function __construct($id, $name, $federation){
        $this->id = $id;
        $this->name = $name;
        $this->federation = $federation;
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getFederation(){
        return $this->federation;
    }

    public function setId($id){
        return $this->id = $id;
    }
    
    public function setName($name){
        return $this->name = $name;
    }

    public function setFederation($federation){
        return $this->federation = $federation;
    }
}