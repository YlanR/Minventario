<?php

namespace App\Controllers;
 use App\Models\CategoriasModels;

class Categorias extends BaseController{
    
    public function __construct(){
        $this->CategoriasModels = new CategoriasModels();
    }

    public function index(){

        $mensaje = session('mensaje');

        $data = array("categorias" => $this->CategoriasModels->getCategorias(),
                    "mensaje" => $mensaje
                    );

        if(session('type') == 'Administrador'){ 
        echo view("layout/header");
        echo view("layout/aside");
        echo view("categorias/categorias", $data);
        echo view("layout/footer");
        }
         else {
            return redirect()->to(base_url().'/inicio'); 
         }
        

    }
    
    public function insertCat(){
    
        $nombre = $this->request->getPost("nombre");
    
        $datosCategoria =  array("nombre"   =>  $nombre );
    
        $respuesta = $this->CategoriasModels->crearCategoria($datosCategoria);
    
        if($respuesta != null){
            return redirect()->to(base_url().'/categorias')->with('mensaje', '1'); 
    
        } else{
            return redirect()->to(base_url().'/agregar-categoria')->with('mensaje', '0'); 
        }
    
    
    }
    

    public function agregarCategoria(){

        $mensaje = session('mensaje');
       
        if(session('type') == 'Administrador'){
        $vistas = view('layout/header').
        view('layout/aside').
        view("categorias/agregarCategoria", ["mensaje" => $mensaje]).
        view('layout/footer');

        return $vistas;

    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }

    }
    

    public function actualizarCategoria(){

        $nombre = $this->request->getPost("nombre");
        $datos =  array("nombre"   =>  $nombre);

        $idCategoria = $_POST['idCategoria'];
    
        $respuesta = $this->CategoriasModels->actualizar($datos, $idCategoria);

        if($respuesta > 0){
            return redirect()->to(base_url().'/categorias')->with('mensaje', '6'); 
    
        } else{
            return redirect()->to(base_url().'/obtenercategoria/(:any)')->with('mensaje', '0'); 
        
        }
    }


    public function obtenerCategoria($idCategoria){
        $data = ["id" => $idCategoria];
        $respuesta = $this->CategoriasModels->obtenerCategoria($data);
        
        $mensaje = session('mensaje');
        $datos = ["datos" => $respuesta,
        "mensaje"  => $mensaje];

        if(session('type') == 'Administrador'){
        echo view("layout/header");
        echo view("layout/aside");
        echo view("categorias/editarcategoria", $datos);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }
        
    }

    public function eliminar($id){

        $datosDelete = ["id" => $id];

        $respuesta = $this->CategoriasModels->eliminar($datosDelete);



        if($respuesta){
    
            return redirect()->to(base_url().'/categorias')->with('mensaje', '2'); 
    
        } else{
            return redirect()->to(base_url().'/categorias')->with('mensaje', '0'); 
        }
    }

}


