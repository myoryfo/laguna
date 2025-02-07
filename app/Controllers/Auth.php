<?php

namespace App\Controllers;

use App\Models\User;
use CodeIgniter\Controller;

class Auth extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->user = new User();
    }

    public function loglog()
    {
        echo $this->request->getMethod();
    }

    public function login()
    {

        if ($this->request->getMethod() === 'POST') {
            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

            $userData = $this->user->where('username', $username)->first();

            if ($userData && password_verify($password, $userData['password'])) {
                session()->set([
                    'id' => $userData['id'],
                    'username' => $userData['username'],
                    'logged_in' => true,
                ]);
                return redirect()->to('/');
            } else {
                return redirect()->to('/login')->with('error', 'Invalid username or password.');
            }
        }

        return view('auth/login', ['title' => 'Login Laguna']);
    }

    // public function register()
    // {
    //     if ($this->request->getMethod() === 'post') {
    //         $data = [
    //             'username'      => $this->request->getPost('username'),
    //             'password'      => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
    //             'name'          => $this->request->getPost('name'),
    //             'role_id'       => $this->request->getPost('role_id'),
    //             'location_id'   => $this->request->getPost('location_id'),
    //         ];

    //         $model = new User();
    //         if ($model->insert($data)) {
    //             return redirect()->to('/login')->with('success', 'Registration successful. You can now log in.');
    //         } else {
    //             return redirect()->back()->with('error', 'Registration failed. Please try again.');
    //         }
    //     }

    //     return view('auth/register', ['title' => 'Laguna Register']);
    // }

    public function register()
    {
        if ($this->request->getMethod() === 'post') {
            echo "Registered";
        } else {
            return view("auth/register", ['title' => 'Register Laguna']);
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
