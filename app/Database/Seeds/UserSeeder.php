<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'username'    => 'pare123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Putri Admin Pare',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id'   => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'pare321',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Aslam Kurir Pare',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id'   => 1,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'barru123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Dian Admin Barru',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id' => 2,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'barru321',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Andi Kurir Barru',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id' => 2,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'pinrang123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Ayu Admin Pinrang',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id' => 3,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'pinrang321',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Agus Kurir Pinrang',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id'   => 3,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'sidrap123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Rina Admin Sidrap',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id' => 4,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'sidrap321',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Sapri Kurir Sidrap',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id' => 4,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'pangkep123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Rina Admin Pangkep',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id' => 5,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'pangkep123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Jamal Kurir Pangkep',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id' => 5,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'sengkang123',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Herlina Admin Sengkang',
                'image'       => 'default.png',
                'role_id'     => 1,
                'lokasi_id' => 6,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'username'    => 'sengkang321',
                'password'    => password_hash('asd123', PASSWORD_DEFAULT),
                'name'        => 'Rahman Kurir Sengkang',
                'image'       => 'default.png',
                'role_id'     => 2,
                'lokasi_id' => 6,
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('users')->insertBatch($data);
    }
}
