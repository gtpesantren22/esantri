<?php

class M_Home extends CI_Model
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

    public function update($table, $where, $dt_where, $data)
    {
        $this->db->where($where, $dt_where);
        $this->db->update($table, $data);
    }

    public function getBy($table, $where, $dt_where)
    {
        $this->db->where($where, $dt_where);
        return $this->db->get($table);
    }
    public function getBy2($table, $where, $dt_where, $where1, $dt_where1)
    {
        $this->db->where($where, $dt_where);
        $this->db->where($where1, $dt_where1);
        return $this->db->get($table);
    }
}
