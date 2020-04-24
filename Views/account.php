<?php

require_once "../DataBase/Connection.php";
require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

?>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if($method == "createAcccount") {
        $retorno = UserController::createAcccount($_POST['name'], $_POST['email'], $_POST['password']);
        if($retorno == 11){?>
            <html>
                <script>
                    alert("Já existe uma conta cadastrada com esse email.");
                    window.location.href = "home.php";
                </script>
            </html>
        <?php }
        if($retorno == 22){?>
            <html>
                <script>
                    alert("Conta cadastrada com sucesso!");
                    window.location.href = "home.php";
                </script>
            </html>
        <?php }
    }
    else {
        echo 'Metodo incorreto';
    }
}
?>
<html>
    <form action="account.php" method="post">
        <input type="hidden" name="method" value="createAcccount">
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="name" class="form-control" id="nome" placeholder="Seu nome" required>
        </div>
        <div class="form-group">
            <label for="endemail">Endereço de email</label>
            <input type="email" name="email" class="form-control" id="endemail" placeholder="email@exemplo.com" required>
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" name="password" class="form-control" id="senha" placeholder="Senha" required>
        </div>
        <button type="submit" class="btn btn-primary"> Cadastrar </button>
    </form>
</html>
