<?php

class M_Tanggungan extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('sentral', TRUE);
    }

    public function dt_santri($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function dt_tangg($where)
    {
        $this->db2->where('nis', $where);
        $this->db2->where('tahun', '2023/2024');
        $this->db2->from('tangg');
        return $this->db2->get();
    }

    public function bayar($where)
    {
        $this->db2->select_sum('nominal');
        $this->db2->where('nis', $where);
        $this->db2->where('tahun', '2023/2024');
        $this->db2->from('pembayaran');
        return $this->db2->get();
    }

    public function rinci_bayar($where)
    {
        $this->db2->where('nis', $where);
        $this->db2->where('tahun', '2023/2024');
        $this->db2->from('pembayaran');
        return $this->db2->get();
    }
}
