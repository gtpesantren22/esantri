<?php

class M_Saku extends CI_Model
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
}
