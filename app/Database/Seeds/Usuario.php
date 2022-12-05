<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Usuario extends Seeder
{
    public function run()
    {
        $usuario = "ylan";
        $password = password_hash("123", PASSWORD_DEFAULT);
        $type = "Administrador";
        $nombre = "Ylan Rizo";

        $data = [
            'usuario'   => $usuario,
            'password'  => $password,
            'type'      => $type,
            'nombre'    => $nombre
        ];

        // Using Query Builder
        $this->db->table('t_usuario')->insert($data);
    }
}
