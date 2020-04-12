<?php 

session_start();

class UserController{

    public static function createAcccount($name, $email, $password){
        $conta = User::create($name, $email, $password);
        if($conta == 1){
            echo "Já existe uma conta cadastrada com esse email.";
        }
        else{
            header("Location: /Treinamento Ecompjr/Views/home.php");
        }
    }

    public static function check($user){
        if($user){
            $_SESSION['user'] = $user->getName();
            header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
        }
        else{
            $_SESSION['failed'] = True;
            header("Location: /Treinamento Ecompjr/Views/login.php");
        }
    }

    public static function verifyLogin(){
        if(!$_SESSION['user']){
            header("Location: /Treinamento Ecompjr/Views/Login.php");
        }
    }

    public static function logout(){
        session_start();
        session_destroy();
        header("Location: /Treinamento Ecompjr/Views/home.php");
    }
}
if(isset($_GET['logout-submit']) && $_GET['logout-submit'] == 'logout'){
    UserController::logout();
}
  