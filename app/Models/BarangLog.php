<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangLog extends Model
{
    protected $table = 'barang_log';
    protected $primaryKey = 'id';
    protected $useTimestamps = true;
    protected $allowedFields = [
        'barang_id',
        'user_id',
        'status_id',
        'lokasi_id',
        'created_at',

    ];

    
    public function getBarangLogbyNoResi($noresi)
    {
        return $this
            ->select('barang_log.barang_id as noresi, lokasi.name as lokasi, status.name as status, users.name as user, barang_log.created_at as tanggal')
            ->join('lokasi', 'lokasi.id = barang_log.lokasi_id')
            ->join('status', 'status.id = barang_log.status_id')
            ->join('users', 'users.id = barang_log.user_id')
            ->where('barang_id', $noresi)
            ->findAll();
    }
}
