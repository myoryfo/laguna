<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Barang;

class StationController extends BaseController
{
    protected $barang;
    protected $validation;

    public function __construct()
    {
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        };
        $this->barang = new Barang();
        if(session('validation') == null){
            $this->validation = \Config\Services::validation();
        } else {
            $this->validation =  session('validation');
        }
    }

    public function departour()
    {
        $user = $this->getUser(); //this called data user login
        $barangData = $this->barang->getBarangWithLokasiAndDepartour($user['lokasi_id']);
        
        $data = [
            'title' => 'Departour | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $this->validation,
            'user' => $user
        ];
        return view('departour', $data);
    }
    
    public function arrived()
    {
        $user = $this->getUser(); //this called data user login
        $barangData = $this->barang->getBarangWithLokasiAndArrived($user['lokasi_name']);
        
        $data = [
            'title' => 'Arrived | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $this->validation,
            'user' => $user
        ];
        return view('arrived', $data);
    }
    public function delivery()
    {
        $user = $this->getUser(); //this called data user login
        $barangData = $this->barang->getBarangWithLokasiAndDelivery($user['lokasi_name']);
        
        $data = [
            'title' => 'Delivered by Courier | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $this->validation,
            'user' => $user
        ];
        return view('delivery', $data);
    }
}
