<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        // Data untuk admin
        $adminData = [
            'nama_pengguna' => 'admin',
            'email'         => 'adminaja@example.com',
            'password'      => password_hash('admin', PASSWORD_DEFAULT),
            'role'          => 'Admin', // Pastikan menggunakan huruf kapital
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        // Data untuk manager
        $managerData = [
            'nama_pengguna' => 'manager',
            'email'         => 'manageraja@example.com',
            'password'      => password_hash('manager', PASSWORD_DEFAULT),
            'role'          => 'Manager', // Pastikan menggunakan huruf kapital
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        // Data untuk staff
        $staffData = [
            'nama_pengguna' => 'staff',
            'email'         => 'staffaja@example.com',
            'password'      => password_hash('staff', PASSWORD_DEFAULT),
            'role'          => 'Staff', // Pastikan menggunakan huruf kapital
            'created_at'    => date('Y-m-d H:i:s'),
        ];

        // Insert data ke tabel pengguna
        $this->db->table('pengguna')->insert($adminData);
        $this->db->table('pengguna')->insert($managerData);
        $this->db->table('pengguna')->insert($staffData);
    }
}
