<?php
    require_once "../../../DataBase/Connection.php";
    require_once "../../../Models/User.php";
    require_once "../../../Controllers/UserController.php";
    require_once "../../../Models/Company.php";
    require_once "../../../Controllers/CompanyController.php";
    UserController::verifyLogin();
?>

<?php
    $companys = CompanyController::all();
    if($companys == 1){
        echo "Não existe companys cadastradas.";
    }
    else{
        foreach ($companys as $company) {    
?>

<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <input type="hidden" name="id" value="<?php echo $company->getId(); ?>">
    <button name="btn" type="submit" value="edit">editar</button>
    <button name="btn" type="submit" value="delete">excluir</button>
</form>

<?php
            echo $company->getName();
            echo " | ";
            echo $company->getFederation();
            echo "<br>";
        }
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['id'] = $_POST['id'];
        switch($_POST['btn'])
        {
            case "edit":
            header("Location: /Treinamento Ecompjr/Views/admin/company/edit.php");
            break;
            
            case "delete":
            CompanyController::delete($_SESSION['id']);
            break;
        }
    }
?>