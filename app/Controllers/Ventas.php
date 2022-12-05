<?php

namespace App\Controllers;
 use App\Models\SalidasModels;

class Ventas extends BaseController{
    
    public function __construct(){
        $this->SalidasModels = new SalidasModels();
    }

    public function index(){

        $mensaje = session('mensaje');

        $data = array("salidas" => $this->SalidasModels->getSalidas(),
        "mensaje"    => $mensaje);

        echo view("layout/header");
        echo view("layout/aside");
        echo view("entradas/ventas", $data);
        echo view("layout/footer"); 

    }
   

}


