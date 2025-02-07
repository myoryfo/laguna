<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class LokasiSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Parepare'],
            ['name' => 'Barru'],
            ['name' => 'Pinrang'],
            ['name' => 'Sidrap'],
            ['name' => 'Pangkep'],
            ['name' => 'Sengkang'],
        ];

        // Using Query Builder
        $this->db->table('lokasi')->insertBatch($data);
    }
}
