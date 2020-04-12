<?php
    require_once "../../../DataBase/Connection.php";
    require_once "../../../Models/User.php";
    require_once "../../../Controllers/UserController.php";
    require_once "../../../Models/Company.php";
    require_once "../../../Controllers/CompanyController.php";
    UserController::verifyLogin();
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        CompanyController::update($_SESSION['id'], $_POST['name'], $_POST['federation']);
    }
?>

<html>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
     <!--<form action="/Treinamento Ecompjr/company/update < ?php $company->getId()?>" method="post">-->
        <input type="hidden" name="method" value="update">
        <!--<input name="name" value="< ?php echo $company->getName()?>" placeholder="name">-->
        <input name="name" placeholder="name" required>
        <!--<input name="federation" value="< ?php echo $company->getFederation()?>" placeholder="federation"> -->         
        <input name="federation" placeholder="federation" required>          
        <button type="submit"> Salvar </button>
    </form>
</html>