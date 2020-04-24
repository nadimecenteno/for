<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="../../Vendor/font-awesome/css/all.css" rel="stylesheet">
        <link rel="stylesheet" href="../../Assets/css/dashboard.css">
        <title>Brasil Júnior - Página Inicial</title>
    </head>
    <body>
        <div class="container">
            <div class="box">

                <?php 
                session_start();    
                echo "Bem vindo(a), ".$_SESSION['user'];
                ?>
                
                <a href="../../Controllers/UserController.php?logout-submit=logout" style="float: right;">
                    <button type="button" class="btn btn-danger">
                        <i class="fas fa-sign-in-alt"></i>
                        Sair
                    </button>
                </a>

                <br>
                <br>
                <div>
                    <a class="btn btn-primary" data-toggle="collapse" href="#collapse-listar-empresa" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-list-ol"></i>
                        Listar Empresas
                    </a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-cadastrar-empresa">
                        <i class="fas fa-plus"></i>
                        Cadastrar Empresa
                    </button>

                    <!-- Collapse com Tabela de Listagem de Empresas -->
                    <div class="collapse p-2" id="collapse-listar-empresa">
                        <div class="card card-body" id="card-listar-empresas">
                            <div class="table-responsive">
                                <table class="table table-striped table-active" id="cssTable" style="border-radius: 5px;">
                                    <thead>
                                        <tr>
                                            <th scope="col">Nome</th>
                                            <th scope="col">Federação</th>
                                            <th scope="col"></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php include("../../Views/admin/company/index.php"); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

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
                        <?php include("../../Views/admin/company/create.php"); ?>
                    </div>
                </div>
            </div>
        </div>
        
    </body>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>