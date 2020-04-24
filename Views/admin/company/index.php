<?php
    require_once "../../DataBase/Connection.php";
    require_once "../../Models/User.php";
    require_once "../../Controllers/UserController.php";
    require_once "../../Models/Company.php";
    require_once "../../Controllers/CompanyController.php";
    UserController::verifyLogin();
?>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['id'] = $_POST['id'];
        switch($_POST['btn'])
        {
            case "edit":?>
                <html>
                    <!-- Modal Cadastrar Empresa -->
                    <div class="modal fade" id="modal-cadastrar-empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header" style="background-color: #007bff">
                                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Cadastrar Empresa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                </div>
                            </div>
                        </div>
                    </div>
                </html>
            <?php break;
            
            case "delete":
            CompanyController::delete($_SESSION['id']);
            break;
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
                            <button type="submit" name="btn" value="edit" class="btn btn-primary" data-toggle="modal" data-target="#modal-cadastrar-empresa">
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