<?php
namespace App\Models;
use CodeIgniter\Model;

class ProductosModels extends Model{

  
    public function getProductos(){
        $productos = $this->db->query("SELECT a.id, a.idcategoria, c.nombre as categorias, a.codigo, a.descripcion, 
        a.compra, a.stock, a.precio, a.fecha FROM inventario a INNER JOIN categorias c WHERE a.idcategoria = c.id ");

        return $productos->getResult();
    }
    
    public function crearProducto($datosProducto){

        $productos = $this->db->table('inventario');
        $productos->insert($datosProducto);

        return $productos;
    }

    public function obtenerProducto($data){
        $productos = $this->db->table('inventario');
        $productos->where($data);
        
        return $productos->get()->getResultArray();

    }
   

    public function actualizar($datos, $idProducto){
        $productos = $this->db->table('inventario');
        $productos->set($datos);
        $productos->where('id', $idProducto);
        return $productos->update();
    }
    
    public function eliminar($datosDelete){
        $productos = $this->db->table('inventario');
        $productos->where($datosDelete);
        return $productos->delete($datosDelete);
 
    }

    public function crearEntrada($datos){

        $productosEntrada = $this->db->table('entradap');
        $productosEntrada->insert($datos);

        return $productosEntrada;
    }

    public function actualizarStock($idProductoEntrada, $valor){
        $actualizar = $this->db->table('inventario');
        $actualizar->set('stock',$valor);
        $actualizar->where('id', $idProductoEntrada);
        return $actualizar->update();
    }

  
    public function actualizarEntrada($idProductoEntrada){

        $productos = $this->db->query("SELECT * FROM inventario WHERE id = $idProductoEntrada ");

        return $productos->getResult();
     }

     public function actualizarSalida($idProductoSalida){

        $productos = $this->db->query("SELECT * FROM inventario WHERE id = $idProductoSalida ");

        return $productos->getResult();
     }

     public function crearSalida($datos){

        $productosSalida = $this->db->table('salidasp');
        $productosSalida->insert($datos);

        return $productosSalida;
    }

    public function actualizarStockSalida($idProductoSalida, $valor){
        $actualizar = $this->db->table('inventario');
        $actualizar->set('stock',$valor);
        $actualizar->where('id', $idProductoSalida);
        return $actualizar->update();
    }

    

}