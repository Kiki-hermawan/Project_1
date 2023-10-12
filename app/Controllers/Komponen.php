<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\KomponenModel;

class Komponen extends BaseController
{

    protected $KomponenModel;

    public function __construct()
    {
        $this->KomponenModel = new KomponenModel();
    }
    public function index()
    {
        $data = array(
            'title' => 'Komponen Tarif',
            'komponen' => $this->KomponenModel->get_komponen(),
            'isi'   => 'pelayanan/komponen_tarif/komponen_tarif'
        );
        return view('pelayanan/komponen_tarif/komponen_tarif', $data);
    }

    public function tambah_komponen()
    {
        $data = array(
            'title' => 'Komponen Tarif',
            'isi'   => 'pelayanan/komponen_tarif/tambah_komponen'
        );
        return view('pelayanan/komponen_tarif/tambah_komponen', $data);
    }

    public function save_komponen()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tipe' => $this->request->getPost('tipe'),
            'create_date' => $this->request->getPost('create_date'),
            'modify_date' => $this->request->getPost('modify_date'),
            'create_user' => $this->request->getPost('create_user'),
            'modify_user' => $this->request->getPost('modify_user'),
        ];

        $this->KomponenModel->insert_komponen($data,);
        session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('komponen'));
    }

    public function edit_komponen($id)
    {
        $data = array(
            'title' => 'Edit',
            'edit_komponen' => $this->KomponenModel->edit_komponen($id),
            'isi'   => 'pelayanan/komponen_tarif/edit_komponen'
        );
        return view('pelayanan/komponen_tarif/edit_komponen', $data);
    }

    public function update_komponen($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'tipe' => $this->request->getPost('tipe'),
            'modify_date' => $this->request->getPost('modify_date'),
        ];

        $this->KomponenModel->update_komponen($data, $id);
        session()->setFlashdata('sukses', 'Data berhasil diupdate');
        return redirect()->to(base_url('komponen'));
    }
    public function delete_komponen($id)
    {
        $this->KomponenModel->delete_komponen($id);
        session()->setFlashdata('sukses', 'Data berhasil dihapus');
        return redirect()->to(base_url('komponen'));
    }
}
