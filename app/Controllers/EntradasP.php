<?php

namespace App\Controllers;
 use App\Models\EntradasModels;

class EntradasP extends BaseController{
    
    public function __construct(){
        $this->EntradasModels = new EntradasModels();
    }

    public function compras()
    {
        $mensaje = '';

        $data = array("entradas" => $this->EntradasModels->getEntradas(),
        "mensaje" => $mensaje);

        $vistas = view('layout/header').
            view('layout/aside').
            view('productos/compras', $data).
            view('layout/footer');

        return $vistas;
    }

    public function ventas()
    {
        $mensaje = '';

        $vistas = view('layout/header').
                view('layout/aside').
                view('salidas/ventas', ["mensaje" => $mensaje]).
                view('layout/footer');

        return $vistas;
    }

}


