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
    foreach ($companys as $company) {
?>

<a href="/Treinamento Ecompjr/company/edit <?php $company->getId(); ?>">
<button>
editar
</button>
</a>

<a href="/Treinamento Ecompjr/company/delete <?php $company->getId(); ?>">
<button>
excluir
</button>
</a>

<?php
    echo $company->getName();
    echo " | ";
    echo $company->getFederation();
    echo "<br>";
}
?>