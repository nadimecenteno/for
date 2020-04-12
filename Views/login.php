<?php 

require_once "../DataBase/Connection.php";
require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

?>
<html>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <input type="email" name="email" placeholder="email" required>        
        <input type="password" name="password" placeholder="password" required>
        <a href = "/Treinamento Ecompjr/Views/admin/dashboard.php">
            <button type="submit"> Entrar </button>
        </a>      
    </form>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = User::find($_POST['email'], $_POST['password']);
        UserController::check($user);
    }
?>