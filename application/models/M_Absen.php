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
        // $now = date('Y-m-d');
        $this->db2->where('nis', $where);
        $this->db2->from('absen');
        $this->db2->group_by('tanggal');
        $this->db2->order_by('tanggal', 'DESC');
        $this->db2->limit(1);
        return $this->db2->get();
    }

    public function dt_abs_all($nis)
    {
        $this->db2->where('nis', $nis);
        $this->db2->from('absen');
        $this->db2->order_by('tanggal', 'DESC');
        return $this->db2->get();
    }

    public function dt_absMd($where)
    {
        // $now = date('Y-m-d');
        $this->db2->where('nis', $where);
        $this->db2->from('absen_md');
        $this->db2->group_by('tanggal');
        $this->db2->order_by('tanggal', 'DESC');
        $this->db2->limit(1);
        return $this->db2->get();
    }

    public function dt_abs_allMd($nis)
    {
        $this->db2->where('nis', $nis);
        $this->db2->from('absen_md');
        $this->db2->order_by('tanggal', 'DESC');
        return $this->db2->get();
    }
}
