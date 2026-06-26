<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\SkillModel;
use App\Models\EducationModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $projectModel   = new ProjectModel();
        $skillModel     = new SkillModel();
        $educationModel = new EducationModel();

        // Mengambil seluruh baris data dari database untuk dihitung jumlahnya di view dashboard
        $data = [
            'title'     => 'Dashboard Admin',
            'projects'  => $projectModel->findAll(),
            'skills'    => $skillModel->findAll(),
            'education' => $educationModel->findAll()
        ];

        // Memanggil komponen layout secara modular (Atas, Samping, Tengah, Bawah)
        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/dashboard', $data); // Halaman Utama Dashboard
        echo view('admin/layout/footer');
    }
}
