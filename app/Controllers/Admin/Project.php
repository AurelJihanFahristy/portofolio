<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProjectModel;

class Project extends BaseController
{
    protected $projectModel;

    public function __construct()
    {
        // Instansiasi model proyek
        $this->projectModel = new ProjectModel();
    }

    // 1. Menampilkan list semua proyek di halaman admin
    public function index()
    {
        $data = [
            'title'    => 'Manajemen Proyek',
            'projects' => $this->projectModel->findAll()
        ];

        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/project/index', $data);
        echo view('admin/layout/footer');
    }

    // 2. Menampilkan form tambah proyek baru
    public function new()
    {
        $data = [
            'title' => 'Tambah Proyek Baru'
        ];

        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/project/new', $data);
        echo view('admin/layout/footer');
    }

    // 3. Memproses penyimpanan data proyek baru ke database
    public function store()
    {
        // Validasi input data
        if (!$this->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'uploaded[image]|max_size[image,2048]|is_image[image]'
        ])) {
            return redirect()->back()->withInput();
        }

        // Handle upload gambar proyek
        $fileGambar = $this->request->getFile('image');
        $namaGambar = $fileGambar->getRandomName();
        $fileGambar->move(ROOTPATH . 'public/uploads', $namaGambar);

        // Simpan ke DB
        $this->projectModel->save([
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'tech_stack'  => $this->request->getPost('tech_stack'),
            'image'       => $namaGambar,
            'github_link' => $this->request->getPost('github_link'),
            'demo_link'   => $this->request->getPost('demo_link'),
        ]);

        return redirect()->to('admin/project')->with('success', 'Proyek berhasil ditambahkan!');
    }

    // 4. Menampilkan halaman Form Edit Proyek
    public function edit($id = null)
    {
        $project = $this->projectModel->find($id);

        if (!$project) {
            return redirect()->to('admin/project')->with('error', 'Data proyek tidak ditemukan.');
        }

        $data = [
            'title'   => 'Edit Proyek',
            'project' => $project
        ];

        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/project/edit', $data);
        echo view('admin/layout/footer');
    }

    // 5. Memproses update data ke Database
    public function update($id = null)
    {
        // Validasi input
        if (!$this->validate([
            'title'       => 'required',
            'description' => 'required',
            'image'       => 'max_size[image,2048]|is_image[image]'
        ])) {
            return redirect()->back()->withInput();
        }

        $projectLama = $this->projectModel->find($id);
        $fileGambar  = $this->request->getFile('image');

        if ($fileGambar && $fileGambar->isValid() && !$fileGambar->hasMoved()) {
            $namaGambar = $fileGambar->getRandomName();
            $fileGambar->move(ROOTPATH . 'public/uploads', $namaGambar);

            if (!empty($projectLama['image']) && file_exists(ROOTPATH . 'public/uploads/' . $projectLama['image'])) {
                unlink(ROOTPATH . 'public/uploads/' . $projectLama['image']);
            }
        } else {
            $namaGambar = $projectLama['image'];
        }

        $this->projectModel->update($id, [
            'title'       => $this->request->getPost('title'),
            'description' => $this->request->getPost('description'),
            'tech_stack'  => $this->request->getPost('tech_stack'),
            'image'       => $namaGambar,
            'github_link' => $this->request->getPost('github_link'),
            'demo_link'   => $this->request->getPost('demo_link'),
        ]);

        return redirect()->to('admin/project')->with('success', 'Proyek berhasil diperbarui!');
    }
}
