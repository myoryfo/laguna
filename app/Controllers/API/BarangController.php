<?php

namespace App\Controllers\API;

use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\RESTful\ResourceController;
use App\Models\Barang;


class BarangController extends ResourceController
{
    protected $barang;
    protected $format = 'json';

    public function __construct()
    {
        $this->barang = new Barang();
        
    }
    /**
     * Return an array of resource objects, themselves in array format.
     *
     * @return ResponseInterface
     */
    public function index()
    {
        $data = [
            'message'       => 'success',
            'data_barang'   =>  $this->barang->orderBy('created_at', 'DESC')->findAll()
        ];
        return $this->respond($data, 200);
    }

    /**
     * Return the properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function updateStatusDepartour($id)
    {
        // Find the post by ID
        $barang = $this->barang->find($id);
        // Update the stats_id to 3
        
        if ($barang) {
            $this->barang->update($id, ['status_id' => 2]);
            session()->setFlashdata('success', 'Departour updated successfully.');
            return $this->respond(['status' => 'success', 'message' => 'Departour updated successfully.']);
        } else {
            return $this->failNotFound('Post not found');
        }
    }
    
    public function updateStatusArrived($id)
    {
        // Find the post by ID
        $barang = $this->barang->find($id);
        // Update the stats_id to 3

        $users = new \App\Models\User();
        $user = $users->find(session()->get('id'));
        
        if ($barang) {
            $this->barang->update($id, ['status_id' => 3, 'current_id' => $user['lokasi_id']]);
            session()->setFlashdata('success', 'Departour updated successfully.');
            return $this->respond(['status' => 'success', 'message' => 'Arrived updated successfully.']);
        } else {
            return $this->failNotFound('Post not found');
        }
    }
    public function updateStatusDeliveryByCour($id)
    {   
        session();
        // Find the post by ID
        $barang = $this->barang->find($id);
        // Update the stats_id to 3
        
        if ($barang) {
            $data = [
                'user_id' => session()->get('id'),
                'status_id' => 4,
            ];
            $this->barang->update($id, $data);
            session()->setFlashdata('success', 'Delivery updated successfully.');
            return $this->respond(['status' => 'success', 'message' => 'Delivery updated successfully.']);
        } else {
            return $this->failNotFound('Post not found');
        }
    }
    public function updateStatusPodDex($id, $status, $ket)
    {   
        session();
        // Find the post by ID
        $barang = $this->barang->find($id);
        // Update the stats_id to 3
        if($barang) {
        if($status == 'pod') {
            
                $data = [
                    'user_id' => session()->get('id'),
                    'status_id' => 5,
                    'keterangan' => $ket
                ];
        } else if($status == 'dex'){
            $data = [
                'user_id' => session()->get('id'),
                'status_id' => 6,
                'keterangan' => $ket
            ];
        }
        
            $this->barang->update($id, $data);
            session()->setFlashdata('success', 'Delivery updated successfully.');
            return $this->respond(['status' => 'success', 'message' => 'Delivery updated successfully.']);
        } else {
            return $this->failNotFound('Post not found');
        }
    }

    public function getDetails()
    {
        $barang = new \App\Models\Barang();
        $barangLog = new \App\Models\BarangLog();
        if ($this->request->getJSON()) {
            $noResi = $this->request->getJSON()->no_resi;
            $barangDetail = $barang->getBarangDetail($noResi);
            $barangLogDetail = $barangLog->getBarangLogbyNoResi($noResi);

            if ($barangDetail) {
                $data = [
                    'barang' => $barangDetail,
                    'barang_log' => $barangLogDetail
                ];
                return $this->response->setJSON(['success' => true, 'data' => $data]);
            } else {
                return $this->response->setJSON(['success' => false]);
            }
        }
    }


    /**
     * Return a new resource object, with default properties.
     *
     * @return ResponseInterface
     */
    public function new()
    {
        //
    }

    /**
     *
     * @return ResponseInterface
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function edit($id = null)
    {
        //
    }

    /**
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model.
     *
     * @param int|string|null $id
     *
     * @return ResponseInterface
     */
    public function delete($id = null)
    {
        //
    }
}
