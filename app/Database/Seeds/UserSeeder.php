<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        //jika 1 data
        // $data = [
        //     'name_user' => 'admin',
        //     'email_user' => 'admin@gmail.com',
        //     'password_user' => password_hash('12345', PASSWORD_DEFAULT),
        // ];

        // $this->db->table('users')->insert($data);

        //jika lebih dari 1 data
        $data = [
            [
                'name_user' => 'steven',
                'email_user' => 'steven@gmail.com',
                'password_user' => password_hash('12345', PASSWORD_DEFAULT),
            ],
            [
                'name_user' => 'user',
                'email_user' => 'user@gmail.com',
                'password_user' => password_hash('123456', PASSWORD_DEFAULT),
            ]
        ];

        $this->db->table('users')->insertBatch($data);
    }
}
