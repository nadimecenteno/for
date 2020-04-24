<?php 

require_once "../DataBase/Connection.php";
require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

?>
<html>
    <form action="login.php" method="post">
        <div class="form-group">
            <label for="endemail">Endereço de email</label>
            <input type="email" name="email" class="form-control" id="endemail" placeholder="email@exemplo.com" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="password" class="form-control" id="senha" placeholder="Senha" required>
        </div>
        <a href = "/Treinamento Ecompjr/Views/admin/dashboard.php">
            <button type="submit" class="btn btn-primary"> Entrar </button>
        </a>
    </form>
</html>

<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $user = User::find($_POST['email'], $_POST['password']);
        UserController::check($user);
    }
?>