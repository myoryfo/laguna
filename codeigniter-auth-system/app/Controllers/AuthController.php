<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function loginUser() {
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $user = $this->userModel->getUserByEmail($email);

        if ($user && password_verify($password, $user['password'])) {
            session()->set('user_id', $user['id']);
            session()->set('user_email', $user['email']);
            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Invalid email or password.');
        }
    }

    public function registerUser() {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        if ($this->userModel->getUserByEmail($email)) {
            return redirect()->back()->with('error', 'Email already exists.');
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $this->userModel->createUser($username, $email, $hashedPassword);
        return redirect()->to('/login')->with('success', 'Registration successful. You can now log in.');
    }

    public function logoutUser() {
        session()->destroy();
        return redirect()->to('/login');
    }
}