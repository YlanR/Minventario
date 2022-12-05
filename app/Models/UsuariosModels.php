<?php
namespace App\Models;
use CodeIgniter\Model;

class UsuariosModels extends Model{
   
    public function getUsuarios(){
        $usuarios = $this->db->query("SELECT * FROM t_usuario");

        return $usuarios->getResult();
    }


    public function crearUsuarios($datosUsuario){

        $usuarios = $this->db->table('t_usuario');
        $usuarios->insert($datosUsuario);

        return $usuarios;
    }

    public function obtenerNombre($data){
        $usuarios = $this->db->table('t_usuario');
        $usuarios->where($data);
        
        return $usuarios->get()->getResultArray();

    }

    public function obtenerRol($data){
        $usuarios = $this->db->table('t_usuario');
        $usuarios->where($data);
        
        return $usuarios->get()->getResultArray();

    }
    public function actualizarRol($datos, $idUsuario){
        $usuarios = $this->db->table('t_usuario');
        $usuarios->set($datos);
        $usuarios->where('id_usuario', $idUsuario);
        return $usuarios->update();
    }

    public function actualizar($datos, $idUsuario){
        $usuarios = $this->db->table('t_usuario');
        $usuarios->set($datos);
        $usuarios->where('id_usuario', $idUsuario);
        return $usuarios->update();
    }
    
    public function eliminar($datosDelete){
        $usuarios = $this->db->table('t_usuario');
        $usuarios->where($datosDelete);
        return $usuarios->delete($datosDelete);
 
    }

    public function info($usuario){
        $consulta = $this->db->query("SELECT * FROM t_usuario WHERE (usuario = '$usuario')");
        $row = $consulta->getRow();
        
        if(isset($row)){
            return $row;
        } else{
            return false;
        }
    }
    // public function getEditarUsuarios($id){

    //     $usuarios = $this->db->query("SELECT * FROM t_usuario WHERE id_usuario =".$id." " );

    //     return $usuarios->getRows();

    // }

}

