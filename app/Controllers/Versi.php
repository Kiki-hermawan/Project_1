<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProdukModel;

class Produk extends BaseController
{

    protected $ProdukModel;

    public function __construct()
    {
        $this->ProdukModel = new ProdukModel();
    }
    public function index()
    {
        $data = array(
            'title' => 'Unit Produk',
            'produk' => $this->ProdukModel->get_produk(),
            'isi'   => 'pelayanan/produk/produk'
        );
        return view('pelayanan/produk/produk', $data);
    }

    public function tambah_produk()
    {
        $data = array(
            'title' => 'Tambah Produk',
            'isi'   => 'pelayanan/produk/tambah_produk'
        );
        return view('pelayanan/produk/tambah_produk', $data);
    }

    public function save_produk()
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'klasifikasi' => $this->request->getPost('klasifikasi'),
            'status' => $this->request->getPost('status'),
            'create_date' => $this->request->getPost('create_date'),
            'modify_date' => $this->request->getPost('modify_date'),
            'create_user' => $this->request->getPost('create_user'),
            'modify_user' => $this->request->getPost('modify_user'),
        ];

        $this->ProdukModel->insert_produk($data,);
        session()->setFlashdata('sukses', 'Data berhasil ditambahkan');
        return redirect()->to(base_url('produk'));
    }

    public function edit_produk($id)
    {
        $data = array(
            'title' => 'Edit produk',
            'edit_produk' => $this->ProdukModel->edit_produk($id),
            'isi'   => 'pelayanan/produk/edit_produk'
        );
        return view('pelayanan/produk/edit_produk', $data);
    }

    public function update_produk($id)
    {
        $data = [
            'nama' => $this->request->getPost('nama'),
            'status' => $this->request->getPost('status'),
            'modify_date' => $this->request->getPost('modify_date'),
        ];

        $this->ProdukModel->update_produk($data, $id);
        session()->setFlashdata('sukses', 'Data berhasil diupdate');
        return redirect()->to(base_url('produk'));
    }
    public function delete_produk($id)
    {
        $this->ProdukModel->delete_produk($id);
        session()->setFlashdata('sukses', 'Data berhasil dihapus');
        return redirect()->to(base_url('produk'));
    }
}
