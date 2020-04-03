<?php

namespace models;

class User{
    private $id;
    private $name;
    private $email;
    private $password;

    public function __construct($id, $name, $email, $password){
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    public static function find($email, $password){
        $connection = Connection::getConnection();
        $query = "select * from users where email = '{$email}' and password = '{$password}'";
        $result = mysqli_query($connection, $query);
        if(mysqli_num_rows($result) == 1){
            $user = mysqli_fetch_assoc($result);
            return new User($user['id'], $user['name'], $user['email'], $user['password']);
        }
        else{
            return false;
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->id;
    }

    public function getEmail(){
        return $this->id;
    }

    public function getPassword(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }
    
    public function setName($name){
        $this->name = $name;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }
}