<?php

require_once "../../DataBase/Connection.php";
require_once "../../Models/Company.php";
require_once "../../Controllers/CompanyController.php";

?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
        $method = $_POST['method'];
        if($method == "store") {
            $retorno = CompanyController::store($_POST['name'], $_POST['federation']);
            if($retorno == 11){?>
                <html>
                    <script>
                        alert("Já existe uma empresa cadastrada com esse nome.");
                        window.location.href = "/Treinamento Ecompjr/Views/admin/dashboard.php";
                    </script>
                </html>
            <?php }
            if($retorno == 22){?>
                <html>
                    <script>
                        alert("Empresa cadastrada com sucesso!");
                        window.location.href = "/Treinamento Ecompjr/Views/admin/dashboard.php";
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
    <form action="" method="post">
        <input type="hidden" name="method" value="store">
        <div class="form-group">
            <label for="name">Nome da Empresa:</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Informe o nome da empresa" required>
        </div>
        <div class="form-group">
            <label for="federation">Nome da Federação:</label>
            <input type="text" class="form-control" name="federation" id="federation" placeholder="Informe o nome da federação da empresa" required>
        </div>
        <div class="modal-footer"> 
            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
        </div>
    </form>
</html>