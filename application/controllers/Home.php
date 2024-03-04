<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Home');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'home';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->M_Home->dt_santri('tb_santri', ['nis' => $nis_santri])->row();
		if ($this->M_Home->dt_tangg($nis_santri)->num_rows() < 1) {
			$data['tangg'] = 'Tidak Ada Tanggungan Biaya Pendidikan';
		} else {
			$data['tangg'] = $this->M_Home->dt_tangg($nis_santri)->row();
		}

		$data['syarat'] = $this->M_Home->getBy('rekap', 'nis', $nis_santri, 'nominal !=', 0)->result();
		$data['total'] = $this->db->query("SELECT SUM(nominal) AS jml FROM rekap WHERE nis = $nis_santri ")->row();

		$this->load->view('head', $data);
		$this->load->view('home', $data);
		$this->load->view('foot');
	}


	// Logout from admin page
	public function logout()
	{

		// Removing session data
		$sess_array = array(
			'namaSesi' => ''
		);
		$this->session->unset_userdata('namaSesi', $sess_array);
		// $data['message_display'] = 'Successfully Logout';
		$this->session->set_flashdata('berhasil', 'Logout Berhasil');
		redirect('login');
	}

	public function updateLog()
	{
		$nis_santri = $this->session->userdata('nis_santri');
		$time = time() + 10;
		$this->M_Home->update('log_santri', 'nis', $nis_santri, ['last_login' => $time]);
	}
}
