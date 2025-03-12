<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\UserModel;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userModel = new UserModel();

        // Data user yang akan dimasukkan
        $data = [
            'username' => 'user',
            'email'    => 'user@example.com',
            'password' => password_hash('password123', PASSWORD_BCRYPT), // Hash password sebelum disimpan
        ];

        // Insert data ke database
        $userModel->insert($data);
    }
}
