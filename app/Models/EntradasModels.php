<?php
namespace App\Models;
use CodeIgniter\Model;

class EntradasModels extends Model{
  
    public function getEntradas(){
        $entradas = $this->db->query("SELECT a.id, a.idcategoria, c.nombre as categorias, a.codigo, a.descripcion, 
        a.compra, a.stock, a.fecha, a.precio FROM entradap a INNER JOIN categorias c WHERE a.idcategoria = c.id ");

        return $entradas->getResult();
    }

    
}

