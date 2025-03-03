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
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        };

        if ($this->request->getMethod() === 'POST') {

            $username = $this->request->getVar('username');
            $password = $this->request->getVar('password');

        $userData = $this->user->getUserLogin($username);

            if ($userData && password_verify($password, $userData['password'])) {
                session()->set([
                    'id' => $userData['id'],
                    'logged_in' => true,
                ]);
                if($userData['role_id'] == '1'){
                    return redirect()->to('/');
                } else if($userData['role_id'] == '2') {
                    return redirect()->to('/delivery');
                }
            } else {
                return redirect()->to('/login')->with('error', 'Invalid username or password.');
            }
        }

        return view('auth/login', ['title' => 'Login Laguna']);
    }



    public function register()
    {
        if (session()->get('logged_in')) {
            return redirect()->to('/');
        };

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
