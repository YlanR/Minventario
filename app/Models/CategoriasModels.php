<?php
namespace App\Models;
use CodeIgniter\Model;

class CategoriasModels extends Model{
  
    public function getCategorias(){
        $categorias = $this->db->query("SELECT * FROM categorias");

        return $categorias->getResult();
    }


    public function crearCategoria($datosCategoria){

        $categorias = $this->db->table('categorias');
        $categorias->insert($datosCategoria);

        return $categorias;
    }

    public function obtenerCategoria($data){
        $categorias = $this->db->table('categorias');
        $categorias->where($data);
        
        return $categorias->get()->getResultArray();

    }
   

    public function actualizar($datos, $idCategoria){
        $categorias = $this->db->table('categorias');
        $categorias->set($datos);
        $categorias->where('id', $idCategoria);
        return $categorias->update();
    }
    
    public function eliminar($datosDelete){
        $categorias = $this->db->table('categorias');
        $categorias->where($datosDelete);
        return $categorias->delete($datosDelete);
 
    }

    // public function getEditarUsuarios($id){

    //     $usuarios = $this->db->query("SELECT * FROM t_usuario WHERE id_usuario =".$id." " );

    //     return $usuarios->getRows();

    // }

}

