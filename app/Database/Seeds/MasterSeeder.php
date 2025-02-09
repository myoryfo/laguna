<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class MasterSeeder extends Seeder
{
    public function run()
    {
        // Call the individual seeders
        $this->call('LokasiSeeder');
        $this->call('UserSeeder');
        $this->call('BarangSeeder');
        $this->call('StatusSeeder');
        // Add other seeders here if needed
    }
}
