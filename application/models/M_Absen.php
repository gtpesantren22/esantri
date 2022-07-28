<?php

class M_Absen extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('info', TRUE);
    }

    public function dt_santri($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function dt_abs($where)
    {
        $now = date('Y-m-d');
        $this->db2->where('nis', $where);
        $this->db2->where('tanggal', $now);
        $this->db2->from('absen');
        return $this->db2->get();
    }

    public function dt_abs_cek($nis, $tgl)
    {
        $this->db2->where('nis', $nis);
        $this->db2->where('tanggal', $tgl);
        $this->db2->from('absen');
        return $this->db2->get();
    }
}
