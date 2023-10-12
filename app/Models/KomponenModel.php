<?php

namespace App\Models;

use CodeIgniter\Model;

class KomponenModel extends Model
{

    public function get_komponen()
    {
        return $this->db->table('komponen_tarif')->get()->getResultArray();
    }
    public function insert_komponen($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('komponen_tarif')->insert($data);
    }
    public function edit_komponen($id)
    {
        return $this->db->table('komponen_tarif')->where('id', $id)->get()->getRowArray();
    }
    public function update_komponen($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('komponen_tarif')->update($data, array('id' => $id));
    }

    public function delete_komponen($id)
    {
        return $this->db->table('komponen_tarif')->delete(array('id' => $id));
    }
}
