<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProfileModel;

class Profile extends BaseController
{
    public function index()
    {
        $model = new ProfileModel();
        $data['profile'] = $model->find(1);

        // KEMBALIKAN KE SINI: Menampilkan dashboard admin profile
        return view('admin/profile', $data);
    }

    public function update()
    {
        $model = new ProfileModel();
        $file = $this->request->getFile('photo');
        $oldPhoto = $this->request->getVar('old_photo');

        // PERBAIKAN: Cek dulu apakah user ada memilih file baru atau tidak
        if ($file && $file->isValid() && !$file->hasMoved()) {
            $newName = $file->getRandomName();
            $file->move(FCPATH . 'uploads/', $newName);
        } else {
            // Jika tidak pilih foto baru, tetap pakai foto yang lama
            $newName = $oldPhoto;
        }

        $model->update(1, [
            'name'  => $this->request->getVar('name'),
            'title' => $this->request->getVar('title'),
            'bio'   => $this->request->getVar('bio'),
            'photo' => $newName
        ]);

        return redirect()->to(base_url('admin/profile'))->with('msg', 'Profil berhasil diperbarui!');
    }
}
