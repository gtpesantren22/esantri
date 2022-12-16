<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Profile', 'model');

		if ($this->session->userdata('namaSesi') != 'qwertyuiop0987654321') {
			redirect('login');
		}
	}

	public function index()
	{
		$data['title'] = 'saku';
		$nis_santri = $this->session->userdata('nis_santri');
		$data['dtsn'] = $this->model->dt_santri('tb_santri', ['nis' => $nis_santri])->row();

		$this->load->view('head', $data);
		$this->load->view('profile', $data);
		$this->load->view('foot');
	}

	public function upHp()
	{
		$nis =  $this->input->post('nis', true);
		$data = [
			'hp' => $this->input->post('hp', true)
		];

		$this->model->edit('tb_santri', $data, $nis);
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('ok', 'No. HP berhasil diperbarui');
			redirect('profile');
		}
	}

	public function upPass()
	{
		$nis =  $this->input->post('nis', true);
		$password =  $this->input->post('password', true);
		$password2 =  $this->input->post('password2', true);

		if ($password != $password2) {
			$this->session->set_flashdata('error', 'Password yang dimasukan tidak sama');
			redirect('profile');
		} else {
			$data = [
				'pass' => $password
			];
			$this->model->edit('tb_santri', $data, $nis);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('ok', 'Password berhasil diperbarui');
				redirect('profile');
			}
		}
	}
}