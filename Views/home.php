<?php

require_once "../DataBase/Connection.php";
require_once "../Models/User.php";
require_once "../Controllers/UserController.php";

?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="../Vendor/font-awesome/css/all.css" rel="stylesheet">
        <title>Brasil Júnior</title>
    </head>
    <body>
        <!--NavBar Página Inicial-->
        <div class="row">
            <div class="col-sm-2">
                <!--Logo Brasil Junior-->
                <nav class="navbar navbar-white bg-white">
                    <a class="navbar-brand" href="home.php">
                        <img src="../Assets/pics/logoBrasilJuniorNavBar.png" width="70" height="50" class="d-inline-block align-top" alt="">
                    </a>
                </nav>
            </div>
            <!--Menu principal-->
            <div class="col-sm-6">
                <div style="padding:1%">
                    <ul class="nav nav-pills flex-column flex-sm-row mb-3 nav-fill" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link active" id="pills-home-tab" data-toggle="pill" href="#brasil-junior" role="tab" aria-controls="pills-home" aria-selected="true">
                                Sobre a Brasil Júnior
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" id="pills-profile-tab" data-toggle="pill" href="#mej" role="tab" aria-controls="pills-profile" aria-selected="false">
                                Sobre o Movimento Empresa Júnior
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="flex-sm-fill text-sm-center nav-link" id="pills-contact-tab" data-toggle="pill" href="#parceiros" role="tab" aria-controls="pills-contact" aria-selected="false">
                                Parceiros
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="flex-sm-fill text-sm-center nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Contato
                            </a>
                            <!--Dropdown Menu com Contato-->
                            <div class="dropdown-menu" id="contato">
                                <a class="dropdown-item" href="https://www.facebook.com/brasiljunior/" target="_blank">
                                    <i class="fab fa-facebook-square p-1" style="color: #3b5998 !important;"></i>      Facebook
                                </a>
                                <a class="dropdown-item" href="https://www.youtube.com/channel/UCJpa3dGqxDUkZq3tFDf0l4Q" target="_blank">
                                    <i class="fab fa-youtube p-1" style="color: #c4302b !important"></i>      Youtube
                                </a>
                                <a class="dropdown-item" href="https://www.instagram.com/bjnoinsta/" target="_blank">
                                    <i class="fab fa-instagram p-1" style="color: #8a3ab9 !important"></i>      Instagram
                                </a>
                                <a class="dropdown-item" href="https://open.spotify.com/show/7IMjbTXIPCQFDeIBCJtIA1?si=I7DGqPjtR122tgGCQRdbNA" target="_blank">
                                    <i class="fab fa-spotify p-1" style="color: #1DB954 !important"></i>      Spotify
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#enviar-mensagem">
                                    <i class="far fa-envelope p-1" style="color: #3b5998 !important"></i>      Envie-nos uma mensagem
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <!--Menu Login e Cadastro-->
            <div class="col-sm-4">
                <div style="padding:1%; padding-right: 10%">
                    <ul class="nav nav-pills justify-content-end">
                        <div class="p-1">
                            <li class="nav-item dropdown-right">
                                <button class="btn btn-primary nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-sign-in-alt p-1"></i>
                                    Entrar
                                </button>
                                <div class="dropdown-menu p-4" style="width:60%;">
                                    <?php include("login.php") ?>
                                </div>
                            </li>
                        </div>
                        <div class="p-1">
                            <li class="nav-item dropdown-right">
                                <button class="btn btn-primary nav-link dropdown" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-user-plus p-1"></i>    
                                    Cadastrar-se
                                </button>
                                <div class="dropdown-menu p-4">
                                    <?php include("account.php");?>
                                </div>
                            </li>
                        </div>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Modal enviar mensagem -->
        <div class="modal fade" id="enviar-mensagem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: #007bff">
                        <h5 class="modal-title" id="exampleModalLabel" style="color:white">Enviar Mensagem ao Brasil Júnior</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="nome" class="col-form-label">Nome:</label>
                                <input type="text" class="form-control" id="nome">

                                <label for="email" class="col-form-label">E-mail:</label>
                                <input type="email" class="form-control" id="email">

                                <label for="email" class="col-form-label">Telefone:</label>
                                <input type="text" class="form-control" id="telefone">
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-form-label">Assunto:</label>
                                <input type="email" class="form-control" id="assunto">

                                <label for="mensagemt" class="col-form-label">Mensagem:</label>
                                <textarea class="form-control" id="mensagem"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Enviar</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-content" id="pills-tabContent">
            <!--BRASIL JÚNIOR-->
            <div class="tab-pane fade show active" id="brasil-junior" role="tabpanel" aria-labelledby="brasil-junior-tab" style="background-image: url('../Assets/pics/pattern_geometric_colorful_139497_1280x720.JPG'); background-size:cover; background-repeat:no-repeat;">
                <?php include("includesHome/BrasilJunior.html");?>
            </div>

            <!--MOVIMENTO EMPRESA JÚNIOR-->
            <div class="tab-pane fade" id="mej" role="tabpanel" aria-labelledby="mej-tab" style="background-image: url('../Assets/pics/sky_clouds_blue_146273_1280x720.JPG'); background-size:cover; background-repeat:no-repeat;">
                <?php include("includesHome/MEJ.html");?>
            </div>

            <!--PARCEIROS-->
            <div class="tab-pane fade" id="parceiros" role="tabpanel" aria-labelledby="parceiros-tab" style="background-image: url('../Assets/pics/wooden_painted_geometric_139259_1280x720.jpg'); background-size:cover; background-repeat:no-repeat;">
                <?php include("includesHome/Parceiros.html");?>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="../Assets/js/index.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</html>
<style>
#btn-login{
    border-bottom-right-radius: 15px !important;
    border-top-right-radius: 15px !important;
    border-bottom-left-radius: 15px !important;
    border-top-left-radius: 15px !important;

}
html, body {
    height: 100%;
    width: 100%;
}
</style>