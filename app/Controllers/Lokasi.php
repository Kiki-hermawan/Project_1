<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Unit_lokasi;

class Lokasi extends BaseController
{

    protected $Unit_lokasi;

    public function __construct()
    {
        $this->Unit_lokasi = new Unit_lokasi();
    }
    public function index()
    {
        $data = array(
            'title' => 'Unit Produk',
            'lokasi' => $this->Unit_lokasi->get_lokasi(),
            'isi'   => 'pelayanan/Unit_lokasi/unit_lokasi'
        );
        return view('pelayanan/Unit_lokasi/unit_lokasi', $data);
    }

    public function tambah_lokasi()
    {
        $data = array(
            'title' => 'Unit Lokasi',
            'isi'   => 'pelayanan/Unit_lokasi/tambah_lokasi'
        );
        return view('pelayanan/Unit_lokasi/tambah_lokasi', $data);
    }

    public function save_lokasi()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'create_date' => $this->request->getPost('create_date'),
            'modify_date' => $this->request->getPost('modify_date'),
            'create_user' => $this->request->getPost('create_user'),
            'modify_user' => $this->request->getPost('modify_user'),
        ];

        $this->Unit_lokasi->insert_lokasi($data,);
        session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('lokasi'));
    }

    public function edit_lokasi($id)
    {
        $data = array(
            'title' => 'Edit Lokasi',
            'edit_lokasi' => $this->Unit_lokasi->edit_lokasi($id),
            'isi'   => 'pelayanan/unit_lokasi/edit_lokasi'
        );
        return view('pelayanan/unit_lokasi/edit_lokasi', $data);
    }

    public function update_lokasi($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'modify_date' => $this->request->getPost('modify_date'),
        ];

        $this->Unit_lokasi->update_lokasi($data, $id);
        session()->setFlashdata('sukses', 'Data berhasil diupdate');
        return redirect()->to(base_url('lokasi'));
    }
    public function delete_lokasi($id)
    {
        $this->Unit_lokasi->delete_lokasi($id);
        session()->setFlashdata('sukses', 'Data berhasil dihapus');
        return redirect()->to(base_url('lokasi'));
    }
}
