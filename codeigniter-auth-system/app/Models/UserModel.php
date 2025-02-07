<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    protected $table = 'users';
    protected $primaryKey = 'id';
    protected $allowedFields = ['username', 'email', 'password'];

    public function getUserByEmail($email) {
        return $this->where('email', $email)->first();
    }

    public function createUser($username, $email, $hashedPassword) {
        return $this->insert([
            'username' => $username,
            'email' => $email,
            'password' => $hashedPassword
        ]);
    }
}