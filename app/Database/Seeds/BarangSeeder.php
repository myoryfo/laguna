<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class BarangSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'noresi' => 1001,
                'isi_barang' => 'Buku',
                'penerima' => 'Andi Wijaya',
                'kota_asal' => 'Jakarta',
                'no_tlp_penerima' => '081234567890',
                'alamat_penerima' => 'Jl. Merdeka No. 1',
                'kota_tujuan' => 'Bandung',
                'pengirim' => 'Budi Santoso',
                'no_tlp_pengirim' => '081234567891',
                'alamat_pengirim' => 'Jl. Sudirman No. 2',
                'lokasi_id' => 1,
                'status_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1002,
                'isi_barang' => 'Pakaian',
                'penerima' => 'Siti Aminah',
                'kota_asal' => 'Surabaya',
                'no_tlp_penerima' => '081234567892',
                'alamat_penerima' => 'Jl. Diponegoro No. 3',
                'kota_tujuan' => 'Malang',
                'pengirim' => 'Agus Salim',
                'no_tlp_pengirim' => '081234567893',
                'alamat_pengirim' => 'Jl. Thamrin No. 4',
                'lokasi_id' => 2,
                'status_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            // Add more dummy data here
            [
                'noresi' => 1003,
                'isi_barang' => 'Elektronik',
                'penerima' => 'Rina Sari',
                'kota_asal' => 'Medan',
                'no_tlp_penerima' => '081234567894',
                'alamat_penerima' => 'Jl. Gatot Subroto No. 5',
                'kota_tujuan' => 'Pekanbaru',
                'pengirim' => 'Dewi Lestari',
                'no_tlp_pengirim' => '081234567895',
                'alamat_pengirim' => 'Jl. Ahmad Yani No. 6',
                'lokasi_id' => 3,
                'status_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1004,
                'isi_barang' => 'Makanan',
                'penerima' => 'Eko Prasetyo',
                'kota_asal' => 'Yogyakarta',
                'no_tlp_penerima' => '081234567896',
                'alamat_penerima' => 'Jl. Malioboro No. 7',
                'kota_tujuan' => 'Solo',
                'pengirim' => 'Fajar Nugroho',
                'no_tlp_pengirim' => '081234567897',
                'alamat_pengirim' => 'Jl. Slamet Riyadi No. 8',
                'lokasi_id' => 4,
                'status_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1005,
                'isi_barang' => 'Mainan',
                'penerima' => 'Gita Permata',
                'kota_asal' => 'Semarang',
                'no_tlp_penerima' => '081234567898',
                'alamat_penerima' => 'Jl. Pandanaran No. 9',
                'kota_tujuan' => 'Salatiga',
                'pengirim' => 'Hendra Wijaya',
                'no_tlp_pengirim' => '081234567899',
                'alamat_pengirim' => 'Jl. Gajah Mada No. 10',
                'lokasi_id' => 5,
                'status_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1006,
                'isi_barang' => 'Peralatan Rumah Tangga',
                'penerima' => 'Indah Sari',
                'kota_asal' => 'Makassar',
                'no_tlp_penerima' => '081234567800',
                'alamat_penerima' => 'Jl. Pettarani No. 11',
                'kota_tujuan' => 'Parepare',
                'pengirim' => 'Joko Susilo',
                'no_tlp_pengirim' => '081234567801',
                'alamat_pengirim' => 'Jl. Veteran No. 12',
                'lokasi_id' => 6,
                'status_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1007,
                'isi_barang' => 'Buku',
                'penerima' => 'Kiki Amalia',
                'kota_asal' => 'Bandung',
                'no_tlp_penerima' => '081234567802',
                'alamat_penerima' => 'Jl. Braga No. 13',
                'kota_tujuan' => 'Cimahi',
                'pengirim' => 'Lina Marlina',
                'no_tlp_pengirim' => '081234567803',
                'alamat_pengirim' => 'Jl. Asia Afrika No. 14',
                'lokasi_id' => 1,
                'status_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1008,
                'isi_barang' => 'Pakaian',
                'penerima' => 'Lutfi Hakim',
                'kota_asal' => 'Malang',
                'no_tlp_penerima' => '081234567804',
                'alamat_penerima' => 'Jl. Ijen No. 15',
                'kota_tujuan' => 'Blitar',
                'pengirim' => 'Maya Sari',
                'no_tlp_pengirim' => '081234567805',
                'alamat_pengirim' => 'Jl. Kawi No. 16',
                'lokasi_id' => 2,
                'status_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1009,
                'isi_barang' => 'Elektronik',
                'penerima' => 'Nina Permata',
                'kota_asal' => 'Pekanbaru',
                'no_tlp_penerima' => '081234567806',
                'alamat_penerima' => 'Jl. Sudirman No. 17',
                'kota_tujuan' => 'Dumai',
                'pengirim' => 'Oki Setiawan',
                'no_tlp_pengirim' => '081234567807',
                'alamat_pengirim' => 'Jl. Hang Tuah No. 18',
                'lokasi_id' => 3,
                'status_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1010,
                'isi_barang' => 'Makanan',
                'penerima' => 'Putu Ayu',
                'kota_asal' => 'Solo',
                'no_tlp_penerima' => '081234567808',
                'alamat_penerima' => 'Jl. Slamet Riyadi No. 19',
                'kota_tujuan' => 'Klaten',
                'pengirim' => 'Qori Hidayat',
                'no_tlp_pengirim' => '081234567809',
                'alamat_pengirim' => 'Jl. Adi Sucipto No. 20',
                'lokasi_id' => 4,
                'status_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1011,
                'isi_barang' => 'Mainan',
                'penerima' => 'Rizki Pratama',
                'kota_asal' => 'Salatiga',
                'no_tlp_penerima' => '081234567810',
                'alamat_penerima' => 'Jl. Diponegoro No. 21',
                'kota_tujuan' => 'Semarang',
                'pengirim' => 'Sari Dewi',
                'no_tlp_pengirim' => '081234567811',
                'alamat_pengirim' => 'Jl. Pandanaran No. 22',
                'lokasi_id' => 5,
                'status_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1012,
                'isi_barang' => 'Peralatan Rumah Tangga',
                'penerima' => 'Taufik Hidayat',
                'kota_asal' => 'Parepare',
                'no_tlp_penerima' => '081234567812',
                'alamat_penerima' => 'Jl. Pettarani No. 23',
                'kota_tujuan' => 'Makassar',
                'pengirim' => 'Umi Kalsum',
                'no_tlp_pengirim' => '081234567813',
                'alamat_pengirim' => 'Jl. Veteran No. 24',
                'lokasi_id' => 6,
                'status_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1013,
                'isi_barang' => 'Buku',
                'penerima' => 'Vina Permata',
                'kota_asal' => 'Cimahi',
                'no_tlp_penerima' => '081234567814',
                'alamat_penerima' => 'Jl. Braga No. 25',
                'kota_tujuan' => 'Bandung',
                'pengirim' => 'Wawan Setiawan',
                'no_tlp_pengirim' => '081234567815',
                'alamat_pengirim' => 'Jl. Asia Afrika No. 26',
                'lokasi_id' => 1,
                'status_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1014,
                'isi_barang' => 'Pakaian',
                'penerima' => 'Xena Pratama',
                'kota_asal' => 'Blitar',
                'no_tlp_penerima' => '081234567816',
                'alamat_penerima' => 'Jl. Ijen No. 27',
                'kota_tujuan' => 'Malang',
                'pengirim' => 'Yuni Sari',
                'no_tlp_pengirim' => '081234567817',
                'alamat_pengirim' => 'Jl. Kawi No. 28',
                'lokasi_id' => 2,
                'status_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1015,
                'isi_barang' => 'Elektronik',
                'penerima' => 'Zaki Permata',
                'kota_asal' => 'Dumai',
                'no_tlp_penerima' => '081234567818',
                'alamat_penerima' => 'Jl. Sudirman No. 29',
                'kota_tujuan' => 'Pekanbaru',
                'pengirim' => 'Ayu Setiawan',
                'no_tlp_pengirim' => '081234567819',
                'alamat_pengirim' => 'Jl. Hang Tuah No. 30',
                'lokasi_id' => 3,
                'status_id' => 3,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1016,
                'isi_barang' => 'Makanan',
                'penerima' => 'Budi Pratama',
                'kota_asal' => 'Klaten',
                'no_tlp_penerima' => '081234567820',
                'alamat_penerima' => 'Jl. Slamet Riyadi No. 31',
                'kota_tujuan' => 'Solo',
                'pengirim' => 'Cici Hidayat',
                'no_tlp_pengirim' => '081234567821',
                'alamat_pengirim' => 'Jl. Adi Sucipto No. 32',
                'lokasi_id' => 4,
                'status_id' => 4,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1017,
                'isi_barang' => 'Mainan',
                'penerima' => 'Dewi Permata',
                'kota_asal' => 'Semarang',
                'no_tlp_penerima' => '081234567822',
                'alamat_penerima' => 'Jl. Diponegoro No. 33',
                'kota_tujuan' => 'Salatiga',
                'pengirim' => 'Eka Setiawan',
                'no_tlp_pengirim' => '081234567823',
                'alamat_pengirim' => 'Jl. Pandanaran No. 34',
                'lokasi_id' => 5,
                'status_id' => 5,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1018,
                'isi_barang' => 'Peralatan Rumah Tangga',
                'penerima' => 'Fajar Pratama',
                'kota_asal' => 'Makassar',
                'no_tlp_penerima' => '081234567824',
                'alamat_penerima' => 'Jl. Pettarani No. 35',
                'kota_tujuan' => 'Parepare',
                'pengirim' => 'Gita Setiawan',
                'no_tlp_pengirim' => '081234567825',
                'alamat_pengirim' => 'Jl. Veteran No. 36',
                'lokasi_id' => 6,
                'status_id' => 6,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1019,
                'isi_barang' => 'Buku',
                'penerima' => 'Hendra Permata',
                'kota_asal' => 'Bandung',
                'no_tlp_penerima' => '081234567826',
                'alamat_penerima' => 'Jl. Braga No. 37',
                'kota_tujuan' => 'Cimahi',
                'pengirim' => 'Indah Setiawan',
                'no_tlp_pengirim' => '081234567827',
                'alamat_pengirim' => 'Jl. Asia Afrika No. 38',
                'lokasi_id' => 1,
                'status_id' => 1,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'noresi' => 1020,
                'isi_barang' => 'Pakaian',
                'penerima' => 'Joko Pratama',
                'kota_asal' => 'Malang',
                'no_tlp_penerima' => '081234567828',
                'alamat_penerima' => 'Jl. Ijen No. 39',
                'kota_tujuan' => 'Blitar',
                'pengirim' => 'Kiki Setiawan',
                'no_tlp_pengirim' => '081234567829',
                'alamat_pengirim' => 'Jl. Kawi No. 40',
                'lokasi_id' => 2,
                'status_id' => 2,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
        ];

        // Using Query Builder
        $this->db->table('barang')->insertBatch($data);
    }
}
