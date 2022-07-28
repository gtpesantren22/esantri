<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Saku');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'saku';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Saku->dt_santri('tb_santri', ['nis' => $nis_santri])->row();

		$this->load->view('head', $data);
		$this->load->view('saku', $data);
		$this->load->view('foot');
	}
}
