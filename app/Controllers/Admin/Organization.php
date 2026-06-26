<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\OrganizationModel;

class Organization extends BaseController
{
    protected $orgModel;
    public function __construct()
    {
        $this->orgModel = new OrganizationModel();
    }

    public function index()
    {
        $data = ['title' => 'Manajemen Organisasi', 'organizations' => $this->orgModel->findAll()];
        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/organization/index', $data);
        echo view('admin/layout/footer');
    }

    public function store()
    {
        // Validasi input termasuk file gambar (opsional, maks 2MB)
        if (!$this->validate([
            'organization_name' => 'required',
            'role'              => 'required',
            'period'            => 'required',
            'image'             => 'max_size[image,2048]|is_image[image]'
        ])) {
            return redirect()->back()->withInput();
        }

        // Handle upload gambar/logo organisasi
        $fileGambar = $this->request->getFile('image');
        $namaGambar = null;

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/uploads', $namaGambar);
        }

        $this->orgModel->save([
            'organization_name' => $this->request->getPost('organization_name'),
            'role'              => $this->request->getPost('role'),
            'period'            => $this->request->getPost('period'),
            'description'       => $this->request->getPost('description'),
            'image'             => $namaGambar // Simpan nama file gambar
        ]);

        return redirect()->to('admin/organization')->with('success', 'Data organisasi berhasil disimpan!');
    }

    public function delete($id)
    {
        $org = $this->orgModel->find($id);

        // Hapus gambar dari server jika ada
        if ($org && !empty($org['image']) && file_exists(ROOTPATH . 'public/uploads/' . $org['image'])) {
            unlink(ROOTPATH . 'public/uploads/' . $org['image']);
        }

        $this->orgModel->delete($id);
        return redirect()->to('admin/organization')->with('success', 'Data organisasi berhasil dihapus!');
    }
}
