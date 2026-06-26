<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    // DIUBAH DARI 'index' MENJADI 'login' BIAR COCOK SAMA ROUTES
    public function login()
    {
        // Jika sudah login, langsung lempar ke dashboard
        if (session()->get('logged_in')) {
            return redirect()->to(base_url('admin/dashboard'));
        }
        return view('admin/login');
    }

    public function process()
    {
        $session  = session();
        $userModel = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari user di database
        $user = $userModel->where('username', $username)->first();

        if ($user) {
            // Verifikasi password terenkripsi BCRYPT
            if (password_verify($password, $user['password'])) {
                $sessionData = [
                    'id'        => $user['id'],
                    'username'  => $user['username'],
                    'logged_in' => true
                ];
                $session->set($sessionData);
                return redirect()->to(base_url('admin/dashboard'));
            } else {
                $session->setFlashdata('msg', 'Password Salah!');
                return redirect()->to(base_url('login'));
            }
        } else {
            $session->setFlashdata('msg', 'Username Tidak Ditemukan!');
            return redirect()->to(base_url('login'));
        }
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(base_url('login'));
    }
}
