<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Admin'],
            ['name' => 'Kurir'],
        ];
        // Using Query Builder
        $this->db->table('role')->insertBatch($data);
    }
}
