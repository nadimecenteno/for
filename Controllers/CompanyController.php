<?php

class CompanyController{

    public static function store($name, $federation){
        $company = Company::create($name, $federation);
        if($company == 1){
            return 11;
        }
        else{
            return 22;
        }
    }

    public static function update($id, $name, $federation){
        $company = Company::update($id, $name, $federation);
        if($company == 1){
            echo "Já existe uma empresa cadastrada com esse nome.";
        }
        else{
            header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
        }
    }

    public static function delete($id){
        $company = Company::delete($id);
        header("Location: /Treinamento Ecompjr/Views/admin/dashboard.php");
    }

    public static function all(){
        return Company::all();
    }
}