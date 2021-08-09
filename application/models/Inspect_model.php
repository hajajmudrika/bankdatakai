<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Inspect_model extends CI_Model
{
    public function hapus_data($id)
    {

        $hasil = $this->db->query("DELETE FROM db_inject WHERE id='$id'");
        return $hasil;
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }
    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function getDataById($id)
    {
        $this->db->where('id', $id);
        return $this->db->get('db_inject');
    }

    function updateFile($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update('db_inject', $data);
    }
}
