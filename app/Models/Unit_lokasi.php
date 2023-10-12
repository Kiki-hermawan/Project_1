<?php

namespace App\Models;

use CodeIgniter\Model;

class Unit_lokasi extends Model
{

    public function get_lokasi()
    {
        return $this->db->table('unit_lokasi')->get()->getResultArray();
    }
    public function insert_lokasi($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('unit_lokasi')->insert($data);
    }
    public function edit_lokasi($id)
    {
        return $this->db->table('unit_lokasi')->where('id', $id)->get()->getRowArray();
    }
    public function update_lokasi($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('unit_lokasi')->update($data, array('id' => $id));
    }

    public function delete_lokasi($id)
    {
        return $this->db->table('unit_lokasi')->delete(array('id' => $id));
    }
}
