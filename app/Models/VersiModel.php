<?php

namespace App\Models;

use CodeIgniter\Model;

class Versi extends Model
{

    public function get_versi()
    {
        return $this->db->table('versi_tarif')->get()->getResultArray();
    }
    public function insert_versi($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('versi_tarif')->insert($data);
    }
    public function edit_versi($id)
    {
        return $this->db->table('versi_tarif')->where('id', $id)->get()->getRowArray();
    }
    public function update_versi($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('versi_tarif')->update($data, array('id' => $id));
    }

    public function delete_versi($id)
    {
        return $this->db->table('versi_tarif')->delete(array('id' => $id));
    }
}
