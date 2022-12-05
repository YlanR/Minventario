<?php
namespace App\Models;
use CodeIgniter\Model;

class DashboardModels extends Model{

     public function Entradas(){
        $entradas = $this->db->query('SELECT compra FROM entradap');
        
        return $entradas->getResult();
    }

    public function Salidas(){
        $entradas = $this->db->query('SELECT ventat FROM salidasp');
        
        return $entradas->getResult();
    }

    public function ProductoMasVendido(){
        // $entradas = $this->db->query('SELECT b.codigo, b.descripcion, sum(b.salida) salida, sum(b.ventat) as ventat as 
        //                                 FROM salidasp b INNER JOIN inventario a on b.codigo = a.codigo GROUP BY b.codigo, b.descripcion ORDER BY sum(b.ventat) DESC LIMIT 10');
        
        // return $entradas->getResult();

        $buscar = $this->db->table('salidasp b');
        $buscar->select('b.codigo', 'b.descripcion', 'b.salida', 'ventat');
        $buscar->SelectSum('b.salida');
        $buscar->SelectSum('b.ventat');
        $buscar->join('inventario a', 'a.codigo = b.codigo');
        
        $buscar->groupBy(['b.codigo', 'b.descripcion']);
        $buscar->select('b.descripcion');
        $buscar->orderBy('ventat', 'DESC');
        $buscar->limit('10');
        $resultado = $buscar->get();
 
         return $resultado->getResult();
    }
}