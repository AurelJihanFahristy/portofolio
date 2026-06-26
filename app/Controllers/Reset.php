<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Reset extends BaseController
{
    public function index()
    {
        $model = new UserModel();

        // Memaksa update data pada ID user nomor 1
        $data = [
            'username' => 'aurelj',
            'password' => password_hash('kiyowo', PASSWORD_BCRYPT),
            'name'     => 'Aurel'
        ];

        if ($model->update(1, $data)) {
            echo "<h3>Akun Berhasil Diperbarui! ✅</h3>";
            echo "Username Baru: <b>aurelj</b><br>";
            echo "Password Baru: <b>kiyowo</b><br><br>";
            echo "Silakan kembali ke halaman <a href='" . base_url('login') . "'>Login Admin</a>.";
        } else {
            echo "Gagal memperbarui database. Pastikan tabel 'users' sudah ada.";
        }
    }
}
