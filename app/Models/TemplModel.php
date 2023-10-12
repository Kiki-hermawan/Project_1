<?php

namespace App\Models;

use CodeIgniter\Model;

class TemplModel extends Model
{

    public function get_templ()
    {
        return $this->db->table('template_tarif')->get()->getResultArray();
    }
    public function insert_templ($data)
    {
        $data['create_date'] = date('Y-m-d H:i:s');
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('template_tarif')->insert($data);
    }
    public function edit_templ($id)
    {
        return $this->db->table('template_tarif')->where('id', $id)->get()->getRowArray();
    }
    public function update_templ($data, $id)
    {
        $data['modify_date'] = date('Y-m-d H:i:s');
        return $this->db->table('template_tarif')->update($data, array('id' => $id));
    }

    public function delete_templ($id)
    {
        return $this->db->table('template_tarif')->delete(array('id' => $id));
    }
}
