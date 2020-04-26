    <!--Modal Cadastrar Empresa -->
    <div class="modal fade" id="modal-editar-empresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #007bff">
                    <h5 class="modal-title" id="exampleModalLabel" style="color: white">Cadastrar Empresa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    
                    <form action="../admin/company/edit.php" method="post">
                    <!--<form action="/Treinamento Ecompjr/company/update < ?php $company->getId()?>" method="post">-->
                        <input type="hidden" name="method" value="update">
                        <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
                        <div class="form-group">
                            <label for="name">Nome da Empresa:</label>
                            <input type="text" class="form-control" name="name" id="name" value="<?php echo $_SESSION['name'];?>" placeholder="Informe o nome da empresa" required>
                        </div>
                        <div class="form-group">
                            <label for="federation">Nome da Federação:</label>
                            <input type="text" class="form-control" name="federation" id="federation" value="<?php echo $_SESSION['federation'];?>" placeholder="Informe o nome da federação da empresa" required>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        </div>
                        <!--<input name="name" value="< ?php echo $company->getName()?>" placeholder="name">-->
                        <!--<input name="federation" value="< ?php echo $company->getFederation()?>" placeholder="federation"> -->
                    </form>
                </div>
            </div>
        </div>
    </div>