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
        $barangData = $this->barang->getBarangWithLokasiAndDepartour();
        
        $data = [
            'title' => 'Departour | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $this->validation,
        ];
        return view('departour', $data);
    }
    
    public function arrived()
    {
        $barangData = $this->barang->getBarangWithLokasiAndArrived();
        
        $data = [
            'title' => 'Arrived | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $this->validation,
        ];
        return view('arrived', $data);
    }
}
