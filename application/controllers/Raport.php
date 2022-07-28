<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Raport extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Raport');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'raport';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Raport->dt_santri('tb_santri', ['nis' => $nis_santri])->row();

		$this->load->view('head', $data);
		$this->load->view('raport', $data);
		$this->load->view('foot');
	}
}
