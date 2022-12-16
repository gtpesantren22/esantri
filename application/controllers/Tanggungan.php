<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tanggungan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Tanggungan');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'tanggungan';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Tanggungan->dt_santri('tb_santri', ['nis' => $nis_santri])->row();

		// if ($this->M_Tanggungan->dt_tangg($nis_santri)->num_rows() < 1) {
		// 	$data['tangg'] = 'Tidak Ada Tanggungan Biaya Pendidikan';
		// } else {
		// 	$data['tangg'] = $this->M_Tanggungan->dt_tangg($nis_santri)->row();
		// }
		$data['tangg'] = $this->M_Tanggungan->dt_tangg($nis_santri)->result();

		$data['bayar'] = $this->M_Tanggungan->bayar($nis_santri)->row();
		$data['rinci_bayar'] = $this->M_Tanggungan->rinci_bayar($nis_santri)->result();

		$this->load->view('head', $data);
		$this->load->view('tanggungan', $data);
		$this->load->view('foot');
	}
}