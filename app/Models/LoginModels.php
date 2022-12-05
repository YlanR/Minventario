<?php
namespace App\Models;
use CodeIgniter\Model;

class LoginModels extends Model{
   
    public function obtenerUsuarios($data){
        $usuario = $this->db->table('t_usuario');
        $usuario->where($data);
        return $usuario->get()->getResultArray();
    }
}