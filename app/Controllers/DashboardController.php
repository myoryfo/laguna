<?php

namespace App\Controllers;

use App\Models\Barang;
use App\Models\User;

class DashboardController extends BaseController
{
    public function index()
    {
        $barangModel = new Barang();
        $barangData = $barangModel->getBarangWithLokasiAndStatus();

        $userModel = new User();
        $userData = $userModel->getUserWithLokasi(session()->get('username'));

        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        };

        $data = [
            'title' => 'Dashboard | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'user' => $userData,
        ];

        return view('dashboard/index', $data);
    }
}
