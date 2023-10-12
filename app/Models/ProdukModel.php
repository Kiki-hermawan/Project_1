<?php

namespace App\Models;

use CodeIgniter\Model;

class ProdukModel extends Model
{

    public function get_produk()
    {
        return $this->db->table('produk')->get()->getResultArray();
    }
    public function insert_produk($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('produk')->insert($data);
    }
    public function edit_produk($id)
    {
        return $this->db->table('produk')->where('id', $id)->get()->getRowArray();
    }
    public function update_produk($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('produk')->update($data, array('id' => $id));
    }

    public function delete_produk($id)
    {
        return $this->db->table('produk')->delete(array('id' => $id));
    }
}
