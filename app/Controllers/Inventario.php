<?php

namespace App\Controllers;
 use App\Models\InventarioModels;



class Inventario extends BaseController{
    
    public function __construct(){
        $this->InventarioModels = new InventarioModels();

    
    }

    public function index(){
        $mensaje = '';
       
        $data = array("inventario"  => $this->InventarioModels->getInventario(),
                   "mensaje"=>$mensaje
                    );

            $vistas = view('layout/header').
            view('layout/aside').
            view('productos/productos', $data).
            view('layout/footer');

        return $vistas;

    }
    
    
}


