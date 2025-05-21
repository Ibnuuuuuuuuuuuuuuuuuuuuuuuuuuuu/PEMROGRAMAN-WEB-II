<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $db = \Config\Database::connect();
        $builder = $db->table('users');

        $email = 'ibnudummybuatmodul7@gmail.com';
        $plainPassword = 'ANIS';

        $existing = $builder->where('email', $email)->get()->getRow();

        if (!$existing || !password_verify($plainPassword, $existing->password)) {
            $builder->insert([
                'email'    => $email,
                'password' => password_hash($plainPassword, PASSWORD_DEFAULT)
            ]);
        }
    }
}