<?php
namespace App\Models;
use CodeIgniter\Model;

class BuscarModels extends Model
{
       public function BuscarProducto($busc){


       $buscar = $this->db->table('inventario a');
       $buscar->select('*');
       $buscar->like('a.codigo', $busc);
       $buscar->orLike('a.id', $busc);
       $buscar->orLike('a.descripcion', $busc);

       


     
       $resultado = $buscar->get();

        return $resultado->getResult();
    }

    

     public function BuscarUsuarios($busc){


        $buscar = $this->db->table('t_usuario');
        $buscar->select('*');
        $buscar->like('usuario', $busc);
        $buscar->orLike('type', $busc);
        $buscar->orLike('nombre', $busc);
        $buscar->orLike('email', $busc);
        $resultado = $buscar->get();
 
         return $resultado->getResult();
     }
}