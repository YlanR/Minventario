<?php

namespace App\Controllers;
use App\Models\LoginModels;
use App\Models\UsuariosModels;
use App\Models\ProductosModels;
use App\Models\DashboardModels;
use App\Models\SalidasModels;
use App\Models\PerdidasModels;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
        
       $vista = view('login', ["mensaje" => $mensaje]);

       return $vista;
    }

    public function dashboard()
    {

        $productos = new ProductosModels;
        $entradas = new DashboardModels;
        $salidas = new SalidasModels;
        $merma = new PerdidasModels;


        $mensaje = session('mensaje');
        



        $data = array("productos" => $productos->getProductos(),
                    "entradas"    => $entradas->Entradas(),
                    "salidas"     => $entradas->ProductoMasVendido(),
                    "merma"       => $merma->getPerdidas(),
                    "mensaje"     =>$mensaje);

        

        $vistas = view('layout/header').
                view('layout/aside').
                view('dashboard', $data).
                view('layout/footer');
        
        return $vistas;

    }



    public function registro()
    {
        $mensaje = session('mensaje');
        
       $vista = view('registro', ["mensaje" => $mensaje]);

       return $vista;
    }

    public function login()
    {
        $usuario = $this->request->getPost('usuario');
        $password = $this->request->getPost('password');

        $Usuario = new LoginModels();

        $datosUsuario = $Usuario->obtenerUsuarios(['usuario'=>$usuario]);

        if(count($datosUsuario) > 0 && 
            password_verify($password, $datosUsuario[0]['password'])){

            $data = [
                        "id_usuario" => $datosUsuario[0]['id_usuario'],
                        "usuario"   => $datosUsuario[0]['usuario'],
                        "type"      => $datosUsuario[0]['type'],
                        "email"     => $datosUsuario[0]['email'],
                        "nombre"    => $datosUsuario[0]['nombre'],
                        "password" =>  $datosUsuario[0]['password'],
                    ];

            $session = session();
            $session->set($data);
            
            return redirect()->to(base_url('/inicio'))->with('mensaje','3');

        } else{
            return redirect()->to(base_url('/'))->with('mensaje','0');
        }
        
    }

    public function register()
    {
        $nombre = $this->request->getPost("nombre");
        $usuario = $this->request->getPost("usuario");
        $email = $this->request->getPost("email");
        $encriptar = password_hash($this->request->getPost("password"), PASSWORD_DEFAULT);
        $passwordrp = $this->request->getPost('passwordrp');

        $Usuario = new UsuariosModels();

        // $userInfo = $Usuario->info($usuario);

        // if($userInfo == false){
            
        //     return redirect()->to(base_url('/registrate'))->with('mensaje','2');
        // }


        $datosUsuario =     ["nombre"   =>  $nombre,
                            "usuario"  =>  $usuario,
                            "password" =>  $encriptar,
                            "email" => $email,
                            "type"     => 'Despacho' ];

    
        $respuesta = $Usuario->crearUsuarios($datosUsuario);
       
        

        if($respuesta != null){
            
    
            return redirect()->to(base_url().'/')->with('mensaje','4'); 
    
        } else{
            return redirect()->to(base_url().'/')->with('mensaje','0');
        }
    }
   

    public function logout(){

        $session = session();
        return redirect()->to(base_url('/'))->with('mensaje','5');
        $session->destroy();

       

    }

}
