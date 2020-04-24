<?php 

class UserController{

    public static function createAcccount($name, $email, $password){
        session_start();
        $conta = User::create($name, $email, $password);
        if($conta == 1){
            return 11;
        }
        else{
            return 22;
        }
    }

    public static function check($user){
        session_start();
        if($user){
            $_SESSION['user'] = $user->getName();
            header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
        }
        else{
            echo "E-mail e senha incompatíveis.";
            $_SESSION['failed'] = True;
        }
    }

    public static function verifyLogin(){
        if(!$_SESSION['user']){
            header("Location: /Treinamento Ecompjr/Views/home.php");
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
  