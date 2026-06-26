<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProjectModel;
use App\Models\SkillModel;
use App\Models\EducationModel;

class Home extends BaseController
{
    public function index()
    {
        $projectModel      = new ProjectModel();
        $skillModel        = new SkillModel();
        $educationModel    = new EducationModel();
        $profileModel      = new \App\Models\ProfileModel();
        $organizationModel = new \App\Models\OrganizationModel(); // Tambahkan ini sekalian
        $certificateModel  = new \App\Models\CertificateModel();

        // Menggabungkan semua data ke dalam satu array tanpa menyimpannya
        $data = [
            'profile'       => $profileModel->find(1), // Hapus "this->" nya
            'projects'      => $projectModel->findAll(),
            'skills'        => $skillModel->findAll(),
            'education'     => $educationModel->orderBy('start_year', 'DESC')->findAll(),
            'organizations' => $organizationModel->findAll(),
            'certificates'  => $certificateModel->findAll()
        ];


        return view('public/index', $data);
    }
}
