<?php

class M_Register extends CI_Model
{

    public function cek_nik($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($table, $data, $where)
    {
        return $this->db->update($table, $data, $where);
    }
}
