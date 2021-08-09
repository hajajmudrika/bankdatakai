<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin_model extends CI_Model
{
    public function hapus_data($id)
    {

        $hasil = $this->db->query("DELETE FROM user WHERE id='$id'");
        return $hasil;
    }
}
