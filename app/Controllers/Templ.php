<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\TemplModel;

class Templ extends BaseController
{

    protected $TemplModel;

    public function __construct()
    {
        $this->TemplModel = new TemplModel();
    }
    public function index()
    {
        $data = array(
            'title' => 'Template Tarif',
            'templ' => $this->TemplModel->get_templ(),
            'isi'   => 'pelayanan/templ_tarif/templ_tarif'
        );
        return view('pelayanan/templ_tarif/templ_tarif', $data);
    }

    public function tambah_templ()
    {
        $data = array(
            'title' => 'templ Tarif',
            'isi'   => 'pelayanan/templ_tarif/tambah_templ'
        );
        return view('pelayanan/templ_tarif/tambah_templ', $data);
    }

    public function save_templ()
    {
        $data = [
            'produk_id' => $this->request->getPost('produk_id'),
            'komponen_id' => $this->request->getPost('komponen_id'),
            'status' => $this->request->getPost('status'),
            'create_date' => $this->request->getPost('create_date'),
            'modify_date' => $this->request->getPost('modify_date'),
            'create_user' => $this->request->getPost('create_user'),
            'modify_user' => $this->request->getPost('modify_user'),
        ];

        $this->TemplModel->insert_templ($data,);
        session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('templ'));
    }

    public function edit_templ($id)
    {
        $data = array(
            'title' => 'Edit Template',
            'edit_templ' => $this->TemplModel->edit_templ($id),
            'isi'   => 'pelayanan/templ_tarif/edit_templ'
        );
        return view('pelayanan/templ_tarif/edit_templ', $data);
    }

    public function update_templ($id)
    {
        $data = [
            'produk_id' => $this->request->getPost('produk_id'),
            'komponen_id' => $this->request->getPost('komponen_id'),
            'status' => $this->request->getPost('status'),
            'modify_date' => $this->request->getPost('modify_date'),
        ];

        $this->TemplModel->update_templ($data, $id);
        session()->setFlashdata('sukses', 'Data berhasil diupdate');
        return redirect()->to(base_url('templ'));
    }
    public function delete_templ($id)
    {
        $this->TemplModel->delete_templ($id);
        session()->setFlashdata('sukses', 'Data berhasil dihapus');
        return redirect()->to(base_url('templ'));
    }
}
