<?php
    require_once "../../../DataBase/Connection.php";
    require_once "../../../Models/User.php";
    require_once "../../../Controllers/UserController.php";
    UserController::verifyLogin();
?>

<html>
    <form action="/Treinamento Ecompjr/company/udpate" method="post">
        <input name="name" value="<?php echo $company->getName()?>" placeholder="name">
        <input name="federation" value="<?php echo $company->getFederation()?>" placeholder="federation">          
        <button type="submit"> Salvar </button>
    </form>
</html>