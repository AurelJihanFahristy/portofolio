<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\SkillModel;

class Skill extends BaseController
{
    protected $skillModel;

    public function __construct()
    {
        $this->skillModel = new SkillModel();
    }

    public function index()
    {
        $data = [
            'title'  => 'Manajemen Keahlian',
            'skills' => $this->skillModel->findAll()
        ];

        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/skill/index', $data);
        echo view('admin/layout/footer');
    }

    public function store()
    {
        $this->skillModel->save([
            'skill_name' => $this->request->getPost('skill_name'),
            'category'   => $this->request->getPost('category'),
        ]);

        return redirect()->to('admin/skill')->with('success', 'Skill baru berhasil ditambahkan!');
    }

    public function delete($id)
    {
        $this->skillModel->delete($id);
        return redirect()->to('admin/skill')->with('success', 'Skill berhasil dihapus!');
    }
}
