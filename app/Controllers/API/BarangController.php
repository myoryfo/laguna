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
        
        if ($barang) {
            $this->barang->update($id, ['status_id' => 3]);
            session()->setFlashdata('success', 'Departour updated successfully.');
            return $this->respond(['status' => 'success', 'message' => 'Arrived updated successfully.']);
        } else {
            return $this->failNotFound('Post not found');
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
