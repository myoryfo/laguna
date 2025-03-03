<?php

namespace App\Controllers;

use App\Models\Barang;
use App\Models\User;



class DashboardController extends BaseController
{
    protected $barang;
    protected $user;

    public function __construct()
    {
        $this->barang = new Barang();
        $this->user = $this->getUser();
        
    }

    public function index()
    {
        $user = $this->user; //this called data user login

        $barangData = $this->barang->getBarangAll();
        if (!session()->get('logged_in')) {
            return redirect()->to('/login');
        };
        
        if(session('validation') == null){
            $validation = \Config\Services::validation();
        } else {
            $validation =  session('validation');
        }
        
        $data = [
            'title' => 'Dashboard | Laguna',
            'company' => 'Laguna',
            'barang' => $barangData,
            'validation' => $validation,
            'user' => $user
        ];

        return view('dashboard/index', $data);
    }

    public function tambahEntry()
    {

        
        $rules = [
            'isi_barang' => [
                'rules' => 'required|max_length[255]',
                'errors'=> [
                    'required' => 'Isi atau Keterangan Barang Harus Diisi!'
                ]
            ],
            'penerima' => [
                'rules' => 'required|max_length[255]',
                'errors'=> [
                    'required' => 'Nama Penerima Harus Diisi!'
                ]
            ],
            'alamat_penerima' => [
                'rules' => 'required|max_length[255]',
                'errors'=> [
                    'required' => 'Alamat Penerima Harus Diisi!'
                ]
            ],
            'no_tlp_penerima' => [
                'rules' => 'required|numeric|max_length[255]',
                'errors'=> [
                    'required' => 'No Tlp Penerima Harus Diisi!',
                    'numeric' => 'Nomor Tlp Harus Angka!'
                ]
            ],
            'pengirim' => [
                'rules' => 'required|max_length[255]',
                'errors'=> [
                    'required' => 'Nama Pengirim Harus Diisi!'
                ]
            ],
            'kota_tujuan' => [
                'rules' => 'required',
                'errors'=> [
                    'required' => 'Pilih Kota Tujuan!'
                ]
            ],
            'alamat_pengirim' => [
                'rules' => 'required|max_length[255]',
                'errors'=> [
                    'required' => 'Alamat Pengirim Harus Diisi!'
                ]
                ],
            'no_tlp_pengirim' => [
                'rules' => 'required|numeric|max_length[255]',
                'errors'=> [
                    'required' => 'No Tlp Pengirim Harus Diisi!',
                    'numeric' => 'Nomor Tlp Harus Angka!'
                ]
            ],
     
        ];
        $data = [
            'noresi' => '66' . str_pad(mt_rand(0, 9999999), 7, '0', STR_PAD_LEFT),
            'isi_barang' => $this->request->getPost('isi_barang'),
            'penerima' => $this->request->getPost('penerima'),
            'alamat_penerima' => $this->request->getPost('alamat_penerima'),
            'no_tlp_penerima' => $this->request->getPost('no_tlp_penerima'),
            'kota_tujuan' => $this->request->getPost('kota_tujuan'),
            'pengirim' => $this->request->getPost('pengirim'),
            'alamat_pengirim' => $this->request->getPost('alamat_pengirim'),
            'no_tlp_pengirim' => $this->request->getPost('no_tlp_pengirim'),
            'lokasi_id' => $this->request->getPost('lokasi_id'),
            'status_id' => $this->request->getPost('status_id'),
            'user_id' => $this->request->getPost('user_id'),
            'current_id' => $this->request->getPost('current_id'),
            
        ];

        if (!$this->validate($rules)) {
            $validation = \Config\Services::validation();
            return redirect()->back()->withInput()->with('validation', $validation)->with('modal', true);
        }
        $this->barang->save($data);
        session()->setFlashdata('success', 'Entry added successfully.');
        return redirect()->to('/');
    }
}
