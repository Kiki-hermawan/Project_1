<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Klasifikasi_produk;

class Klasifikasi extends BaseController
{

    protected $Klasifikasi_produk;

    public function __construct()
    {
        $this->Klasifikasi_produk = new Klasifikasi_produk();
    }
    public function index()
    {
        $data = array(
            'title' => 'Klasifikasi Produk',
            'klasifikasi' => $this->Klasifikasi_produk->get_klasifikasi(),
            'isi'   => 'pelayanan/Klasifikasi_produk/klasifikasi_produk'
        );
        return view('pelayanan/Klasifikasi_produk/klasifikasi_produk', $data);
    }

    public function tambah_klasifikasi()
    {
        $data = array(
            'title' => 'Klasifikasi Produk',
            'isi'   => 'pelayanan/Klasifikasi_produk/tambah_klasifikasi'
        );
        return view('pelayanan/Klasifikasi_produk/tambah_klasifikasi', $data);
    }

    public function save_klasifikasi()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'parent' => $this->request->getPost('parent'),
            'create_date' => $this->request->getPost('create_date'),
            'modify_date' => $this->request->getPost('modify_date'),
            'create_user' => $this->request->getPost('create_user'),
            'modify_user' => $this->request->getPost('modify_user'),
        ];

        $this->Klasifikasi_produk->insert_klasifikasi($data,);
        session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('klasifikasi'));
    }

    public function edit_klasifikasi($id)
    {
        $data = array(
            'title' => 'Edit',
            'edit_klasifikasi' => $this->Klasifikasi_produk->edit_klasifikasi($id),
            'isi'   => 'pelayanan/Klasifikasi_produk/edit_klasifikasi'
        );
        return view('pelayanan/Klasifikasi_produk/edit_klasifikasi', $data);
    }

    public function update_klasifikasi($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'parent' => $this->request->getPost('parent'),
            'modify_date' => $this->request->getPost('modify_date'),
        ];

        $this->Klasifikasi_produk->update_klasifikasi($data, $id);
        session()->setFlashdata('sukses', 'Data berhasil diupdate');
        return redirect()->to(base_url('klasifikasi'));
    }
    public function delete_klasifikasi($id)
    {
        $this->Klasifikasi_produk->delete_klasifikasi($id);
        session()->setFlashdata('sukses', 'Data berhasil dihapus');
        return redirect()->to(base_url('klasifikasi'));
    }
}
