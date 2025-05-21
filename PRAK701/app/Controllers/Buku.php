<?php

namespace App\Controllers;

use App\Models\BukuModel;

class Buku extends BaseController
{
    public function index()
    {
        $model = new BukuModel();
        $data['buku'] = $model->findAll();
        return view('buku/index', $data);
    }

    public function create()
    {
        return view('buku/create');
    }

    public function store()
    {
        $validation = \Config\Services::validation();
        $validation->setRules([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'tahun_terbit' => 'required|integer|greater_than[1800]|less_than[2024]'
        ], [
            'judul' => ['required' => 'Judul harus diisi'],
            'penulis' => ['required' => 'Penulis harus diisi'],
            'penerbit' => ['required' => 'Penerbit harus diisi'],
            'tahun_terbit' => [
                'required' => 'Tahun harus diisi',
                'integer' => 'Tahun harus berupa angka',
                'greater_than' => 'Tahun minimal 1801',
                'less_than' => 'Tahun maksimal 2023'
            ]
        ]);

        if (!$validation->withRequest($this->request)->run()) {
            return redirect()->back()->withInput()->with('errors', $validation->getErrors());
        }

        $model = new BukuModel();
        $model->insert($this->request->getPost());
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $model = new BukuModel();
        $data['buku'] = $model->find($id);
        return view('buku/edit', $data);
    }

    public function update($id)
    {
        $model = new BukuModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $model = new BukuModel();
        $model->delete($id);
        return redirect()->to('/buku');
    }
}

 