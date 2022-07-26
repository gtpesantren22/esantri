<?php

class M_Crash extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->db2 = $this->load->database('eman', TRUE);
    }

    public function dt_santri($table, $where)
    {
        return $this->db->get_where($table, $where);
    }

    public function dt_crs($where)
    {
        $now = date('Y-m-d');
        $this->db2->where('nis', $where);
        // $this->db2->where('tanggal', $now);
        $this->db2->from('pelanggaran');
        return $this->db2->get();
    }

    public function detail_data($where)
    {
        $this->db2->select('pelanggaran.*, tb_santri.nama, tb_santri.desa, tb_santri.kec, tb_santri.kab');
        $this->db2->from('pelanggaran');
        $this->db2->join('tb_santri', 'tb_santri.nis = pelanggaran.nis');
        $this->db2->where('pelanggaran.id', $where);
        return $this->db2->get()->result();
    }
}
