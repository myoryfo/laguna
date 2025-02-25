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

    public function getUserLogin($username)
    {
        return  $this
            ->where('username', $username)
            ->first();
    }
    public function getUserWithProfile($id)
    {
        return  $this
            ->select('users.*, lokasi.name as lokasi_name, role.name as role_name')
            ->join('lokasi', 'lokasi.id = users.lokasi_id')
            ->join('role', 'role.id = users.role_id')
            ->where('users.id', $id)    
            ->first();
    }
}
