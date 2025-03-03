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
        'user_id',
        'current_id',
        'keterangan',
        'created_at',
        'updated_at'
    ];

    protected $afterInsert = ['logInsert'];
    protected $afterUpdate = ['logUpdate'];

    protected function logInsert(array $data)
    {
        $this->logAction($data['id'], 'insert');
        return $data;
    }

    protected function logUpdate(array $data)
    {
        $this->logAction($data['id'][0], 'update');
        return $data;
    }

    protected function logAction($barangId, $action)
    {
        $barang = $this->find($barangId);
        $db = \Config\Database::connect();
        $db->table('barang_log')->insert([
            'barang_id' => $barang['noresi'],
            'user_id' => $barang['user_id'],
            'status_id' => $barang['status_id'],
            'lokasi_id' => $barang['current_id'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);
    }


    public function getBarangAll()
    {
        return $this
            ->select('barang.*, lokasi.name as lokasi_name, status.name as status_name, users.name as user_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id')
            ->orderBy('status.id', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }

    public function getBarangDetail($no_resi)
    {
        return $this
            ->select('barang.id, barang.noresi, barang.isi_barang, barang.penerima, barang.alamat_penerima, barang.pengirim, barang.alamat_pengirim,lokasi.name as kota_asal, barang.kota_tujuan, status.name as status, users.name as user, barang.keterangan')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id')
            ->where('noresi', $no_resi)
            ->first();
    }

    public function getBarangWithLokasiAndDepartour($lokasi_id)
    {
        return $this->select('barang.*, lokasi.name as lokasi_name, status.name as status_name, users.name as user_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id', "left")
            ->where('barang.lokasi_id', $lokasi_id)
            ->whereIn('status_id', [1,2])
            ->orderBy('status_id', 'ASC')
            ->orderBy('kota_tujuan', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }
    
    public function getBarangWithLokasiAndArrived($lokasi_name)
    {
        return $this->select('barang.*, lokasi.name as lokasi_name, status.name as status_name, users.name as user_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id', "left")
            ->where('barang.kota_tujuan', $lokasi_name)
            ->whereIn('status_id', [2,3])
            ->orderBy('status_id', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }
    public function getBarangWithLokasiAndDelivery($user_lokasi_name)
    {
        return $this->select('barang.*, lokasi.name as lokasi_name, status.name as status_name, users.name as user_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id', "left")
            ->where('kota_tujuan', $user_lokasi_name)
            ->whereIn('status_id', [3,4])
            ->orderBy('status_id', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }
    public function getBarangWithLokasiAndPoddex($user_id)
    {
        return $this->select('barang.*, lokasi.name as lokasi_name, status.name as status_name, users.name as user_name')
            ->join('lokasi', 'lokasi.id = barang.lokasi_id')
            ->join('status', 'status.id = barang.status_id')
            ->join('users', 'users.id = barang.user_id')
            ->where('user_id', $user_id)
            ->whereIn('status_id', [4,5,6])
            ->orderBy('status_id', 'ASC')
            ->orderBy('updated_at', 'DESC')
            ->findAll();
    }
    
}
