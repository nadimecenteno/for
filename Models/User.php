<?php

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

    public static function create($name, $email, $password){
        $connection = Connection::getConnection();
        $exist = "select * from users where email = '{$email}'";
        $result = mysqli_query($connection, $exist);
        if(mysqli_num_rows($result) == 0){
            $query = "insert into users (name, email, password) values ('{$name}', '{$email}', '{$password}')";
            $result = mysqli_query($connection, $query);
        }
        else{
            return 1;
        }
    }

    public function getId(){
        return $this->id;
    }

    public function getName(){
        return $this->name;
    }

    public function getEmail(){
        return $this->email;
    }

    public function getPassword(){
        return $this->password;
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