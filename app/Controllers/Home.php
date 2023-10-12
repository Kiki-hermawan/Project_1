<?php

namespace App\Controllers;

use App\Models\Klasifikasi_produk;

class Home extends BaseController
{
    protected $Klasifikasi_produk;

    public function __construct()
    {
        $this->Klasifikasi_produk = new Klasifikasi_produk();
    }
    public function index()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi'   => 'v_home'
        );
        return view('layout/v_wrapper', $data);
    }
    public function dashboard()
    {
        $data = array(
            'title' => 'Dashboard',
            'isi'   => 'v_home'
        );
        return view('v_home', $data);
    }
}
