<?php

namespace App\Controllers;
 use App\Models\UsuariosModels;

class Usuarios extends BaseController{
    
    public function __construct(){
        $this->UsuariosModels = new UsuariosModels();
    }

    public function index(){

        $mensaje = session('mensaje');

        $data = array("usuarios" => $this->UsuariosModels->getUsuarios(),
                "mensaje" => $mensaje
                 );


         if(session('type') == 'Administrador'){ 
        echo view("layout/header");
        echo view("layout/aside");
        echo view("usuarios/usuarios", $data);
        echo view("layout/footer");
         }
         else {
            return redirect()->to(base_url().'/inicio'); 
         }
        

    }

    public function roles(){

        $mensaje = session('mensaje');

        $data = array("usuarios" => $this->UsuariosModels->getUsuarios(),
        "mensaje" => $mensaje
        );

        if(session('type') == 'Administrador'){ 
        echo view("layout/header");
        echo view("layout/aside");
        echo view("usuarios/roles", $data);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }
   
        
    }

    public function obtenerRol($idUsuario){
        $data = ["id_usuario" => $idUsuario];
        $respuesta = $this->UsuariosModels->obtenerRol($data);
        
        $mensaje = session('mensaje');
        $datos = ["datos" => $respuesta,
        "mensaje"  => $mensaje];

        if(session('type') == 'Administrador'){ 

        echo view("layout/header");
        echo view("layout/aside");
        echo view("usuarios/editarrol", $datos);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }
   
        
    }

    public function actualizarRol()
    {
        $type = $this->request->getPost("type");

        $datos =  array("type"   =>  $type);

        $idUsuario = $_POST['idUsuario'];
    
        $respuesta = $this->UsuariosModels->actualizarRol($datos, $idUsuario);

        if($respuesta > 0){
            return redirect()->to(base_url().'/roles')->with('mensaje', '6'); 
    
        } else{
            return redirect()->to(base_url().'/editarrol')->with('mensaje', '0'); 
        }
    }

    public function insert(){
    
        $nombre = $this->request->getPost("nombre");
        $usuario = $this->request->getPost("usuario");
        $email = $this->request->getPost("email");
        $encriptar = password_hash($this->request->getPost("contraseña"), PASSWORD_DEFAULT);
        $type = $this->request->getPost("type");
    
    
        $datosUsuario =  array("nombre"   =>  $nombre,
                    "usuario"  =>  $usuario,
                    "password" =>  $encriptar,
                    "email" => $email,
                    "type"     => $type );
    
        $respuesta = $this->UsuariosModels->crearUsuarios($datosUsuario);
    
        if($respuesta != null){
            
    
            return redirect()->to(base_url().'/usuarios')->with('mensaje','7'); 
    
        } else{
            return redirect()->to(base_url().'/usuarios')->with('mensaje','0'); 
        }
    
    
    }
    

    public function agregarUsuario(){
        
        $mensaje = session('mensaje');

        if(session('type') == 'Administrador'){ 

        echo view("layout/header");
        echo view("layout/aside");
        echo view("usuarios/agregarusuario", ["mensaje" => $mensaje]);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }

    }

    public function actualizarUsuario(){

        $nombre = $this->request->getPost("nombre");
        $usuario = $this->request->getPost("usuario");
        $email = $this->request->getPost("email");


        $datos =  array("nombre"   =>  $nombre,
                        "usuario"  =>  $usuario,
                        "email" => $email,
                        );

        $idUsuario = $_POST['idUsuario'];
    
        $respuesta = $this->UsuariosModels->actualizar($datos, $idUsuario);

        if($respuesta > 0){
            return redirect()->to(base_url().'/usuarios')->with('mensaje', '6'); 
    
        } else{
            return redirect()->to(base_url().'/')->with('mensaje', '0');
        }
    }


    public function obtenerNombre($idUsuario){
        $data = ["id_usuario" => $idUsuario];
        $respuesta = $this->UsuariosModels->obtenerNombre($data);
        
        $mensaje = session('mensaje');
        $datos = ["datos" => $respuesta,
        "mensaje"  => $mensaje];

        if(session('type') == 'Administrador'){ 

        echo view("layout/header");
        echo view("layout/aside");
        echo view("usuarios/editarusuario", $datos);
        echo view("layout/footer");
    }
    else {
       return redirect()->to(base_url().'/inicio'); 
    }
        
    }

    public function eliminar($id){

        $datosDelete = ["id_usuario" => $id];

        $respuesta = $this->UsuariosModels->eliminar($datosDelete);



        if($respuesta){
    
            return redirect()->to(base_url().'/usuarios')->with('mensaje', '2'); 
    
        } else{
            return redirect()->to(base_url().'/usuarios')->with('mensaje', '1'); 
        }
    }

}
