<?php

namespace App\Controllers;
use App\Models\BuscarModels;

class Buscar extends BaseController
{

    public function index()
    {

        $mensaje = '';

        $busqueda = new BuscarModels();

        
        if($_POST){
            $buscar = $this->request->getPost("buscar");     
        } 
        else {
            $data = '';
        }

        $data = [
            'busqueda' => $busqueda->BuscarProducto($buscar),
            'mensaje' => $mensaje
        ];

        $vistas = view('layout/header').
            view('layout/aside').
            view('productos/productos', $data).
            view('layout/footer');
            

            return $vistas;

    }

    public function usuario()
    {

        $mensaje = '';

        $busqueda = new BuscarModels();

        if($_POST){
            $buscar = $this->request->getPost("buscarusuario");     
        } 
        else {
            $data = '';
        }

        $data = [
            'usuarios' => $busqueda->BuscarUsuarios($buscar),
            'mensaje' => $mensaje
        ];

        $vistas = view('layout/header').
            view('layout/aside').
            view('usuarios/usuarios', $data).
            view('layout/footer');
            

            return $vistas;

    }

    public function indexdos()
    {
        $mensaje = '';

        $busqueda = new BuscarModels();

        if($_POST){
            $buscar = $this->request->getPost("buscarcar");     
        } 
        else {
            $data = '';
        }

        $data = [
            'busqueda' => $busqueda->BuscarProducto($buscar),
            'mensaje' => $mensaje
        ];

        $vistas = view('layout/header').
            view('layout/aside').
            view('productos/carga_masiva', $data).
            view('layout/footer');
            

            return $vistas;
    }
    
   
}