<?php

namespace App\Controllers;
 use App\Models\ProductosModels;
 use App\Models\CategoriasModels;
 use App\Models\PerdidasModels;

class Salidas extends BaseController{
    
    public function __construct(){
        $this->ProductosModels = new ProductosModels();
        $this->CategoriasModels = new CategoriasModels();
        $this->PerdidasModels = new PerdidasModels();

    }

    public function index($idProducto){
        $data = ["id" => $idProducto
                ];

        $mensaje = session('mensaje');

        $respuesta = $this->ProductosModels->obtenerProducto($data);
        
        $datos = ["datos" => $respuesta,
        "productos" => $this->ProductosModels->getProductos(),
        "categorias" => $this->CategoriasModels->getCategorias(),
        "mensaje"   => $mensaje];


        echo view("layout/header");
        echo view("layout/aside");
        echo view("productos/salida", $datos);
        echo view("layout/footer");
        
    }

   
    public function insertSalida(){

            $idProductoSalida = $this->request->getPost("idProductoSalida");
            $codigo = $this->request->getPost("codigoSalida");
            $descripcion = $this->request->getPost("descripcionSalida");
            $categoria = $this->request->getPost("categoriaSalida");
            $precio = $this->request->getPost("preciosalida");
            $salida = $this->request->getPost("salidastock");
            $stock = $this->request->getPost("stocksalida");

            $motivos = $this->request->getPost("motivo");


            $ventatotal = $salida * $precio;

            if($_POST['motivo'] == "Vencido" OR $_POST['motivo'] == "Extraviado" OR $_POST['motivo'] == "Otro"){

                $datos =  array("idsalida"   =>  $idProductoSalida, 
                "codigo"   =>  $codigo,
                "descripcion"   =>  $descripcion,
                "nombre_categoria"   =>  $categoria,
                "ventat"   =>  $ventatotal,
                "salida"   =>  $salida,
                "motivo"  =>  $motivos
                 );

                 $traerProducto = $this->ProductosModels->actualizarSalida($idProductoSalida);
             $respuesta = $this->PerdidasModels->crearPerdida($datos);

             foreach ($traerProducto as $key => $valueP){

                $valor = $stock - $salida;

                $modificar = $this->ProductosModels->actualizarStockSalida($idProductoSalida, $valor);

            };
             
            if($respuesta != null){
                return redirect()->to(base_url().'/carga_masiva')->with('mensaje','6'); 
        
            } else{
                return redirect()->to(base_url().'/salida/(:num)')->with('mensaje','0'); 
            }
            
            }
                    $datos =  array("idsalida"   =>  $idProductoSalida, 
                                    "codigo"   =>  $codigo,
                                    "descripcion"   =>  $descripcion,
                                    "nombre_categoria"   =>  $categoria,
                                    "ventat"   =>  $ventatotal,
                                    "salida"   =>  $salida
                                     );
    
            
        
            $respuesta = $this->ProductosModels->crearSalida($datos);
            $traerProducto = $this->ProductosModels->actualizarSalida($idProductoSalida);

            foreach ($traerProducto as $key => $valueP){

                $valor = $stock - $salida;

                $modificar = $this->ProductosModels->actualizarStockSalida($idProductoSalida, $valor);

            };

    
            if($respuesta != null){
                return redirect()->to(base_url().'/carga_masiva')->with('mensaje','6'); 
        
            } else{
                return redirect()->to(base_url().'/salida/(:num)')->with('mensaje','0'); 
            }
    
    
    }
    
    

}


