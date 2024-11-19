<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        return view('auth/login');
    }

    public function authenticate()
    {
        $userModel = new UserModel();
        $namaPengguna = $this->request->getPost('nama_pengguna');
        $password = $this->request->getPost('password');

        $user = $userModel->where('nama_pengguna', $namaPengguna)->first();

        if ($user && password_verify($password, $user['password'])) {
            // Ubah 'id_user' menjadi 'id_pengguna'
            session()->set('user_id', $user['id_pengguna']); // Sesuaikan dengan nama kolom di database
            session()->set('role', $user['role']);

            return redirect()->to('/dashboard');
        } else {
            return redirect()->back()->with('error', 'Nama pengguna atau password salah');
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
