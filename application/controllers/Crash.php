<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Crash extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Crash');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'crash';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Crash->dt_santri('tb_santri', ['nis' => $nis_santri])->row();
		$data['crs'] = $this->M_Crash->dt_crs($nis_santri)->result();

		$this->load->view('head', $data);
		$this->load->view('crash', $data);
		$this->load->view('foot');
	}

	public function detail($id = null)
	{
		$data['title'] = 'crash';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Crash->dt_santri('tb_santri', ['nis' => $nis_santri])->row();
		$data['detail'] = $this->M_Crash->detail_data($id);

		$this->load->view('head', $data);
		$this->load->view('crash_dt', $data);
		$this->load->view('foot');
	}
}
