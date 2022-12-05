<?php
namespace App\Models;
use CodeIgniter\Model;

class InventarioModels extends Model{
  
    public function getInventario(){
        $inventario = $this->db->query("SELECT a.id, a.idcategoria, c.nombre as categorias, a.codigo, a.descripcion, 
        a.compra, a.stock, a.precio, a.fecha FROM inventario a INNER JOIN categorias c WHERE a.idcategoria = c.id");
        
        return $inventario->getResult();
    }

    // public function contarRegistros(){
    //     $consulta = $this->db->table('inventario');
    //     $consulta = $consulta->select('*');
    //     $productos = $consulta->get();

    //     if($productos->getNumRows() > 0){
    //         return $productos->getNumRows();
    //     } else{
    //         return false;
    //     }
    // }
    
    // public function listar_limit($offset, $limit){
    //     $consulta = $this->db->table('inventario');
    //     $consulta = $consulta->select('*')->limit($limit, $offset);
    //     $productos = $consulta->get();

    //     if($productos->getNumRows() > 0){
    //         $productos->getResult();
    //     } else{
    //         return false;
    //     }
    // }

}

