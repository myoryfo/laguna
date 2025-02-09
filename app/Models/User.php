<?php

namespace App\Models;

use CodeIgniter\Model;

class User extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'password'];

    public function getUserByUsername($username)
    {
        return $this->where('username', $username)->first();
    }

    public function getUserWithLokasi($username)
    {
        return  $this->where('username', $username)
            ->select('users.*, lokasi.name as lokasi_name')
            ->join('lokasi', 'lokasi.id = users.lokasi_id')
            ->first();
    }
}
