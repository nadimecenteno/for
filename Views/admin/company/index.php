<?php
    require_once "../../DataBase/Connection.php";
    require_once "../../Models/User.php";
    require_once "../../Controllers/UserController.php";
    require_once "../../Models/Company.php";
    require_once "../../Controllers/CompanyController.php";
    UserController::verifyLogin();
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['method'])){
        if(($_POST['method'] == "edit") || ($_POST['method'] == "delete")){
            $_SESSION['id'] = $_POST['id'];
            switch($_POST['btn'])
            {
                case "edit":
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['federation'] = $_POST['federation'];
                include("../../Views/admin/company/editFront.php");
                break;
                
                case "delete":
                CompanyController::delete($_SESSION['id']);
                break;
            }

        }
    }
?>

<html>
    <?php
        $companys = CompanyController::all();
        if($companys == 1){?>
            <tr>
                <td class="table-light">
                    <div class="alert alert-danger" role="alert">
                        Não existem empresas cadastradas.
                    </div>
                </td>
                <td class="table-light"></td>
                <td class="table-light"></td>
            </tr>
        <?php }
        else{
            foreach ($companys as $company) {?>
                <tr>
                    <td><?php echo $company->getName();?></td>
                    <td><?php echo $company->getFederation();?></td>
                    <td>
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?php echo $company->getId(); ?>">
                            <input type="hidden" name="name" value="<?php echo $company->getName(); ?>">
                            <input type="hidden" name="federation" value="<?php echo $company->getFederation(); ?>">
                            <button type="submit" name="btn" value="edit" class="btn btn-primary">
                                <input type="hidden" name="method" value="edit">
                                <i class="far fa-edit"></i>
                                Editar
                            </button>
                            <button type="submit" name="btn" value="delete" class="btn btn-danger">
                                <i class="far fa-trash-alt"></i>
                                Excluir
                            </button>
                        </form>
                    </td>
                </tr>
            <?php }
        }?>

</html>