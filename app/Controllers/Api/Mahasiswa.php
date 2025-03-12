<?php

namespace App\Controllers\API;
use CodeIgniter\RESTful\ResourceController;

class Mahasiswa extends ResourceController
{
    protected $modelName = 'App\Models\MahasiswaModel';
    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll());
    }
    public function show($id = null)
    {
        $data = $this->model->find($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('Data Mahasiswa Tidak Ditemukan');
        }
    }

    public function create()
    {
        $data = $this->request->getJSON();
        $this->model->insert($data);
        return $this->respondCreated($data, 'Mahasiswa Berhasil Ditambahkan');
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();
        $this->model->update($id, $data);
        return $this->respond($data, 200, 'Mahasiswa Berhasil Diupdate');
    }

    public function delete($id = null)
    {
        $this->model->delete($id);
        return $this->respondDeleted(['id' => $id, 'message' => 'Mahasiswa Berhasil Dihapus']);
    }
}