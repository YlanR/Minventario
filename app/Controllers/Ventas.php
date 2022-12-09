<?php

namespace App\Controllers;
 use App\Models\SalidasModels;
 use App\Models\PerdidasModels;

class Ventas extends BaseController{
    
    public function __construct(){
        $this->SalidasModels = new SalidasModels();
        $this->PerdidasModels = new PerdidasModels();
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

    
    public function perdidas(){

        $mensaje = session('mensaje');

        $data = array("motivos" => $this->PerdidasModels->getPerdidas(),
        "mensaje"    => $mensaje);
        
            echo view("layout/header");
            echo view("layout/aside");
            echo view("entradas/perdidas", $data);
            echo view("layout/footer");  

    }

   

}


