<?php

class M_Login extends CI_Model
{

    public function cek_login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function updateLog($nis)
    {
        $time = time() + 10;

        $this->db->where('nis', $nis);
        $this->db->update('log_santri', ['last_login' => $time]);
    }

    public function tambah($table, $data)
    {
        $this->db->insert($table, $data);
    }
}
