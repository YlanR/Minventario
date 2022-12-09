<?php
namespace App\Models;
use CodeIgniter\Model;

class PerdidasModels extends Model{
  
    public function getPerdidas(){
        $salidas = $this->db->query("SELECT a.id, a.nombre_categoria, c.nombre as categorias, a.codigo, a.descripcion, 
        a.ventat ,a.salida,a.motivo , a.fecha FROM perdidas a INNER JOIN categorias c WHERE a.nombre_categoria = c.id ");

        return $salidas->getResult();
    }


     public function crearPerdida($datos){

        $productosSalida = $this->db->table('perdidas');
        $productosSalida->insert($datos);

        return $productosSalida;
    }

    
}

