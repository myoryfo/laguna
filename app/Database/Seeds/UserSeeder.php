<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'    => 'budi123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Budi Santoso',
                'image'       => 'default.png',
                'role_id'     => 1,
                'location_id' => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'andi456',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Andi Wijaya',
                'image'       => 'default.png',
                'role_id'     => 2,
                'location_id' => 2,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'siti789',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Siti Aminah',
                'image'       => 'default.png',
                'role_id'     => 3,
                'location_id' => 3,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'agus101',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Agus Salim',
                'image'       => 'default.png',
                'role_id'     => 4,
                'location_id' => 4,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'rina202',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Rina Sari',
                'image'       => 'default.png',
                'role_id'     => 5,
                'location_id' => 5,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
