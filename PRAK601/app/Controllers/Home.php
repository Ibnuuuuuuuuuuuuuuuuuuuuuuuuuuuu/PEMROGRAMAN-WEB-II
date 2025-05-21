<?php

namespace App\Controllers;
use App\Models\ProfilModel;

class Home extends BaseController
{
    public function index()
    {
        $model = new ProfilModel();
        $data = [
            'nama' => $model->getNama(),
            'nim'  => $model->getNIM()
        ];
        return view('beranda', $data);
    }

    public function profil()
    {
        $model = new ProfilModel();
        $data = $model->getProfil();
        return view('profil', $data);
    }
}