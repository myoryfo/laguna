<?php

namespace App\Models;

use CodeIgniter\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'noresi',
        'isi_barang',
        'penerima',
        'kota_asal',
        'no_tlp_penerima',
        'alamat_penerima',
        'kota_tujuan',
        'pengirim',
        'no_tlp_pengirim',
        'alamat_pengirim',
        'lokasi_id',
        'status_id',
        'created_at',
        'updated_at'
    ];


    public function getBarangWithLokasiAndStatus()
    {
        return $this->select('barang.*, lokasi.name as lokasi_name, status.name as status_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->findAll();
    }
}
