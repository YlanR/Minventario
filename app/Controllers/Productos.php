<?php

namespace App\Controllers;
 use App\Models\ProductosModels;
 use App\Models\CategoriasModels;

class Productos extends BaseController{
    
    public function __construct(){
       $ProductoModel = $this->ProductosModels = new ProductosModels();
        $this->CategoriasModels = new CategoriasModels();
    }


    public function index(){
        $mensaje = session('mensaje');

        
        $data = array("productos" => $this->ProductosModels->getProductos(),
                "mensaje" => $mensaje);
        
            $vistas = view('layout/header').
            view('layout/aside').
            view('productos/carga_masiva', $data).
            view('layout/footer');

            return $vistas;

    }

    // public function productos()
    // {
    //     $vistas = view('layout/header').
    //             view('layout/aside').
    //             view('productos').
    //             view('layout/footer');

    //     return $vistas;
    // }

    public function insertPro(){
    
        $categoria = $this->request->getPost("categoria");
        $codigo = $this->request->getPost("codigo");
        $descripcion = $this->request->getPost("descripcion");
        $compra = $this->request->getPost("compra");
        $stock = $this->request->getPost("stock");
        $precio = $this->request->getPost("precio");
    
        $datosProducto =  array("idcategoria"   =>  $categoria, 
                                "codigo"   =>  $codigo,
                                "descripcion"   =>  $descripcion,
                                "compra"   =>  $compra,
                                "stock"   =>  $stock,
                                "precio"   =>  $precio
                            );

        if($this->validate('Producto')){
            $respuesta = $this->ProductosModels->crearProducto($datosProducto);
            $respuesta2 = $this->ProductosModels->crearEntrada($datosProducto);

            if( $respuesta != null){

                return redirect()->to(base_url().'/carga_masiva')->with('mensaje', '1');
            }

        } else{
            
            return redirect()->to(base_url('/agregar-productos'))->with('mensaje', '0');
        }
    
    
    }
    

    public function agregarProducto(){

        $mensaje = session('mensaje');

        if(session('type') == 'Administrador'){ 
        $data = array("productos" => $this->ProductosModels->getProductos(),
                      "categorias" => $this->CategoriasModels->getCategorias(),
                        "mensaje" => $mensaje);

                      $vistas = view('layout/header').
                      view('layout/aside').
                      view('productos/agregarproductos', $data).
                      view('layout/footer');
          
                      return $vistas;

                    }
                    else {
                       return redirect()->to(base_url().'/inicio'); 
                    }
    }

    public function actualizarProducto(){

        $categoria = $this->request->getPost("categoria");
        $codigo = $this->request->getPost("codigo");
        $descripcion = $this->request->getPost("descripcion");
        $compra = $this->request->getPost("compra");
        $stock = $this->request->getPost("stock");
        $precio = $this->request->getPost("precio");
        $datos =  array("idcategoria"   =>  $categoria,
                        "codigo"      =>  $codigo,
                        "descripcion" =>  $descripcion,
                        "compra"   =>  $compra,
                        "stock"       =>  $stock,
                        "precio"      =>  $precio);

        $idProducto = $_POST['idProducto'];
    
        $respuesta = $this->ProductosModels->actualizar($datos, $idProducto);

        if($respuesta > 0){
            return redirect()->to(base_url().'/carga_masiva')->with('mensaje', '6'); 
    
        } else{
            return redirect()->to(base_url().'/obtenerproducto/(:any)')->with('mensaje', '0'); 
        }
    }


    public function obtenerProducto($idProducto){
        $data = ["id" => $idProducto];

        $respuesta = $this->ProductosModels->obtenerProducto($data);
        
        $mensaje = session('mensaje');
        $datos = ["datos" => $respuesta,
        "productos" => $this->ProductosModels->getProductos(),
        "categorias" => $this->CategoriasModels->getCategorias(),
        "mensaje"   => $mensaje];

        if(session('type') == 'Administrador'){ 
        echo view("layout/header");
        echo view("layout/aside");
        echo view("productos/editarproducto", $datos);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }
        
    }

    public function eliminar($id){

        $datosDelete = ["id" => $id];

        $respuesta = $this->ProductosModels->eliminar($datosDelete);



        if($respuesta){
    
            return redirect()->to(base_url().'/carga_masiva')->with('mensaje', '2'); 
    
        } else{
            return redirect()->to(base_url().'/carga_masiva')->with('mensaje', '1'); 
        }
    }




}

