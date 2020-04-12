<?php

require_once "../DataBase/Connection.php";
require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

?>
<html>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="method" value="createAcccount">
        <input type="text" name="name" placeholder="name" required>
        <input type="email" name="email" placeholder="email" required>
        <input type="password" name="password" placeholder="password" required>     
        <button type="submit"> Cadastrar </button>
    </form>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if($method == "createAcccount") {
        UserController::createAcccount($_POST['name'], $_POST['email'], $_POST['password']);
    }
    else {
        echo 'Metodo incorreto';
    }
}
?>