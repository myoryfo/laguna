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
        $this->user = new User();
    }

    public function index()
    {
        $barangData = $this->barang->getBarangWithLokasiAndStatus();
        $userData = $this->user->getUserWithLokasi(session()->get('username'));

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

    public function tambahEntry()
    {
        $isiBarang = $this->request->getPost('isi_barang');
        $namaPenerima = $this->request->getPost('nama_penerima');
        $alamatPenerima = $this->request->getPost('alamat_penerima');
        $noTlpPenerima = $this->request->getPost('no_tlp_penerima');
        $kotaTujuan = $this->request->getPost('kota_tujuan');
        $namaPengirim = $this->request->getPost('nama_pengirim');
        $alamatPengirim = $this->request->getPost('alamat_pengirim');
        $noTlpPengirim = $this->request->getPost('no_tlp_pengirim');
        $lokasiId = $this->request->getPost('lokasi_id');
        $statusId = $this->request->getPost('status_id');

        $data = [
            'noresi' => '1234567890',
            'isi_barang' => $isiBarang,
            'penerima' => $namaPenerima,
            'alamat_penerima' => $alamatPenerima,
            'no_tlp_penerima' => $noTlpPenerima,
            'kota_tujuan' => $kotaTujuan,
            'pengirim' => $namaPengirim,
            'alamat_pengirim' => $alamatPengirim,
            'no_tlp_pengirim' => $noTlpPengirim,
            'lokasi_id' => $lokasiId,
            'kota_asal' => session()->get('lokasi_name'),
            'status_id' => $statusId,
        ];


        $this->barang->save($data);
        session()->setFlashdata('success', 'Entry added successfully.');
        return redirect()->to('/');
    }
}
