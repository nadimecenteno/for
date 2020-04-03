<?php 

    require_once "Router.php";
    require_once "DataBase/Connection.php";
    require_once "Models/User.php";
    require_once "Models/Company.php";
    require_once "Controllers/UserController.php";
    require_once "Controllers/HomeController.php";
    require_once "Controllers/CompanyController.php";

    $router = new Router();
    $router->start($_GET);