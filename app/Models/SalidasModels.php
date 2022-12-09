<?php
namespace App\Models;
use CodeIgniter\Model;

class SalidasModels extends Model{
  
    public function getSalidas(){
        $salidas = $this->db->query("SELECT a.id, a.nombre_categoria, c.nombre as categorias, a.codigo, a.descripcion, 
        a.ventat ,a.salida,a.motivo , a.fecha FROM salidasp a INNER JOIN categorias c WHERE a.nombre_categoria = c.id ");

        return $salidas->getResult();
    }

    
}

