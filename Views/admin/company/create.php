<?php

require_once "../../../DataBase/Connection.php";
require_once "../../../Models/Company.php";
require_once "../../../Controllers/CompanyController.php";

?>
<html>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="hidden" name="method" value="store">
        <input name="name" placeholder="name" required>
        <input name="federation" placeholder="federation" required>
        <a href = "/Treinamento Ecompjr/Views/admin/dashboard.php">          
            <button type="submit"> Cadastrar </button>    
        </a>    
    </form>
</html>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])) {
    $method = $_POST['method'];
    if($method == "store") {
        CompanyController::store($_POST['name'], $_POST['federation']);
    }
    else {
        echo 'Metodo incorreto';
    }
}
?>