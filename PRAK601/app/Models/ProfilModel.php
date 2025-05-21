<?php

namespace App\Models;
use CodeIgniter\Model;

class ProfilModel extends Model
{
    public function getNama()
    {
        return "Muhammad Ibnu Sina";
    }

    public function getNIM()
    {
        return "2310817210009";
    }

    public function getProfil()
    {
        return [
            'nama'   => 'Muhammad Ibnu Sina',
            'nim'    => '2310817210009',
            'prodi'  => 'Teknologi Informasi',
            'hobi'   => 'Travelling, Menonton, Mendengarkan Musik',
            'skill'  => 'Desain Grafis, Coding, Sports',
            'jabatan' =>'Ketua Umum HMTI FT ULM 2025',
            'gambar' => 'foto.jpg' 
        ];
    }
}