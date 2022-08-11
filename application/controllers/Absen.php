<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absen extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Absen');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'absen';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Absen->dt_santri('tb_santri', ['nis' => $nis_santri])->row();
		$data['abs'] = $this->M_Absen->dt_abs($nis_santri)->result();
		$data['abs_all'] = $this->M_Absen->dt_abs_all($nis_santri)->result();

		$this->load->view('head', $data);
		$this->load->view('absen', $data);
		$this->load->view('foot');
	}

	public function cek()
	{
		$data['title'] = 'absen';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Absen->dt_santri('tb_santri', ['nis' => $nis_santri])->row();
		$data['abs'] = $this->M_Absen->dt_abs($nis_santri)->result();

		$tanggal = $this->input->post('tanggal', true);
		$data['cek_abs'] = $this->M_Absen->dt_abs_cek($nis_santri, $tanggal);
		$data['tgl'] = $tanggal;

		$this->load->view('head', $data);
		$this->load->view('absen_cek', $data);
		$this->load->view('foot');
	}
}
