<?php

class CompanyController{

    public function index(){
        header("Location: /Treinamento Ecompjr/Views/admin/company/index.php");
    }

    public function create(){
        header("Location: /Treinamento Ecompjr/Views/admin/company/create.php");
    }

    public function store(){
        $company = Company::create($_POST['name'], $_POST['federation']);
        header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
    }

    public function edit(){
        header("Location: /Treinamento Ecompjr/Views/admin/company/edit.php");
    }

    public function update(){
        $company = Company::update($_POST['name'], $_POST['federation']);
        header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
    }

    public function delete(){
        $company = Company::delete();
        header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
    }

    public static function all(){
        return Company::all();
    }
}