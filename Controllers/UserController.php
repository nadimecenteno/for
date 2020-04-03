<?php 

    require_once "../Models/User.php";
    session_start();

class UserController{

    public function check(){
        $user = User::find($_POST['email'], $_POST['password']);
        if($user){
            $_SESSION['user'] = $user->getName();
            header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
        }
        else{
            $_SESSION['failed'] = True;
            header("Location: /Treinamento Ecompjr/Views/login.php");
        }
    }

    public function verifyLogin(){
        if(!$_SESSION['user']){
            header("Location: /Treinamento Ecompjr/Views/Login.php"); //home/login
        }
    }

    public static function logout(){
        session_start();
        session_destroy();
        header("Location: /Treinamento Ecompjr/Views/home.php");
    }
}
if($_SERVER["REQUEST_METHOD"] == "POST") { // aqui é onde vai decorrer a chamada se houver um *request* POST
    $product = new UserController;
    $product->check($_POST);
}