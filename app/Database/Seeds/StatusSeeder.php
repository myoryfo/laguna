<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusSeeder extends Seeder
{
    public function run()
    {
        $data = [
            ['name' => 'Entry'],
            ['name' => 'Departour To'],
            ['name' => 'Arrived In'],
            ['name' => 'Delivered by'],
            ['name' => 'Success'],
            ['name' => 'Return'],
        ];

        // Using Query Builder
        $this->db->table('status')->insertBatch($data);
    }
}
