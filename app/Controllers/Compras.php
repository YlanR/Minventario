<?php

namespace App\Controllers;
 use App\Models\EntradasModels;

class Compras extends BaseController{
    
    public function __construct(){
        $this->EntradasModels = new EntradasModels();
    }

    public function index(){

        $mensaje = session('mensaje');

        $data = array("entradas" => $this->EntradasModels->getEntradas(),
                "mensaje"    => $mensaje);

        

        echo view("layout/header");
        echo view("layout/aside");
        echo view("entradas/compras", $data);
        echo view("layout/footer"); 

    }
   

}


