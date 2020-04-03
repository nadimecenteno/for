<?php 
    require_once "../Models/User.php";

?>
<html>
    <form action="/Treinamento Ecompjr/Controllers/UserController.php <?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input name="email" placeholder="email">        
        <input type="password" name="password" placeholder="password">
        <a href = "/Treinamento Ecompjr/Views/admin/dashboard.php">
            <button type="submit"> Entrar </button>
        </a>      
    </form>
</html>