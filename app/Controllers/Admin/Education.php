<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\EducationModel;

class Education extends BaseController
{
    protected $eduModel;

    public function __construct()
    {
        $this->eduModel = new EducationModel();
    }

    public function index()
    {
        $data = [
            'title'     => 'Manajemen Pendidikan',
            'education' => $this->eduModel->orderBy('start_year', 'DESC')->findAll()
        ];

        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/education/index', $data);
        echo view('admin/layout/footer');
    }

    public function store()
    {
        $this->eduModel->save([
            'institution' => $this->request->getPost('institution'),
            'degree'      => $this->request->getPost('degree'),
            'major'       => $this->request->getPost('major'),
            'start_year'  => $this->request->getPost('start_year'),
            'end_year'    => $this->request->getPost('end_year'),
            'gpa'         => $this->request->getPost('gpa'),
            'description' => $this->request->getPost('description'),
        ]);

        return redirect()->to('admin/education')->with('success', 'Data pendidikan berhasil ditambah!');
    }

    public function delete($id)
    {
        $this->eduModel->delete($id);
        return redirect()->to('admin/education')->with('success', 'Data pendidikan berhasil dihapus!');
    }
}
