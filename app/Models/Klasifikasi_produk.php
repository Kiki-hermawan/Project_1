<?php

namespace App\Models;

use CodeIgniter\Model;

class Klasifikasi_produk extends Model
{

    public function get_klasifikasi()
    {
        return $this->db->table('klasifikasi_produk')->get()->getResultArray();
    }
    public function insert_klasifikasi($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('klasifikasi_produk')->insert($data);
    }
    public function edit_klasifikasi($id)
    {
        return $this->db->table('klasifikasi_produk')->where('id', $id)->get()->getRowArray();
    }
    public function update_klasifikasi($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('klasifikasi_produk')->update($data, array('id' => $id));
    }

    public function delete_klasifikasi($id)
    {
        return $this->db->table('klasifikasi_produk')->delete(array('id' => $id));
    }
}
