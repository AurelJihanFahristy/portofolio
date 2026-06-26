<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\CertificateModel;

class Certificate extends BaseController
{
    protected $certModel;
    public function __construct()
    {
        $this->certModel = new CertificateModel();
    }

    public function index()
    {
        $data = ['title' => 'Manajemen Sertifikat', 'certificates' => $this->certModel->findAll()];
        echo view('admin/layout/header', $data);
        echo view('admin/layout/sidebar');
        echo view('admin/certificate/index', $data);
        echo view('admin/layout/footer');
    }

    public function store()
    {
        $this->certModel->save([
            'certificate_name' => $this->request->getPost('certificate_name'),
            'issuer'           => $this->request->getPost('issuer'),
            'year'             => $this->request->getPost('year'),
            'link'             => $this->request->getPost('link'),
        ]);
        return redirect()->to('admin/certificate')->with('success', 'Sertifikat berhasil disimpan!');
    }

    public function delete($id)
    {
        $this->certModel->delete($id);
        return redirect()->to('admin/certificate')->with('success', 'Sertifikat berhasil dihapus!');
    }
}
