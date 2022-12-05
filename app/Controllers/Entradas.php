<?php

namespace App\Controllers;
 use App\Models\ProductosModels;
 use App\Models\CategoriasModels;

class Entradas extends BaseController{
    
    public function __construct(){
        $this->ProductosModels = new ProductosModels();
        $this->CategoriasModels = new CategoriasModels();
    }

    public function index($idProducto){
        $data = ["id" => $idProducto];

        $mensaje = session('mensaje');

        $respuesta = $this->ProductosModels->obtenerProducto($data);
        
        $datos = ["datos" => $respuesta,
        "productos" => $this->ProductosModels->getProductos(),
        "categorias" => $this->CategoriasModels->getCategorias(),
        "mensaje"    =>$mensaje];


        echo view("layout/header");
        echo view("layout/aside");
        echo view("productos/entrada", $datos);
        echo view("layout/footer");
        
    }

   
    public function insertEntrada(){

            $idProductoEntrada = $this->request->getPost("idProductoEntrada");
            $codigo = $this->request->getPost("codigoEntrada");
            $descripcion = $this->request->getPost("descripcionEntrada");
            $categoria = $this->request->getPost("categoriaEntrada");
            $entrada = $this->request->getPost("entradastock");
            $compra = $this->request->getPost("compraEntrada");
            $stock = $this->request->getPost("stockentrada");

            $entradatotal = $entrada * $compra;

                    $datos =  array("identrada"   =>  $idProductoEntrada, 
                                    "codigo"   =>  $codigo,
                                    "descripcion"   =>  $descripcion,
                                    "idcategoria"   =>  $categoria,
                                    "stock"   =>  $entrada,
                                    "compra"  => $entradatotal
                                     );
    
            
             if($this->validate('Stock')){
            $respuesta = $this->ProductosModels->crearEntrada($datos);
            $traerProducto = $this->ProductosModels->actualizarEntrada($idProductoEntrada);
             
            foreach ($traerProducto as $key => $valueP){

                $valor = $stock + $entrada;

                $modificar = $this->ProductosModels->actualizarStock($idProductoEntrada, $valor);

            };
    
            if($respuesta != null){
                return redirect()->to(base_url().'/carga_masiva')->with('mensaje','6'); 
        
            } 
            
            } else{
                return redirect()->to(base_url().'/entrada/(:num)')->with('mensaje','0'); 
            }
    
    
    }
    
    

}


