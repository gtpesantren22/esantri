<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_Register');

        if ($this->session->userdata('namaSesi') === 'qwertyuiop0987654321') {
            redirect('home');
        }
    }

    public function index()
    {
        $data['title'] = "Halaman REgister";
        $this->load->view('register');
    }

    public function proses()
    {

        $data['title'] = "Halaman Login";

        $nik = $this->input->post('nik', true);
        $where = array('nik' => $nik);

        $cek = $this->M_Register->cek_nik('tb_santri', $where);
        $cek2 = $cek->row('pass');

        if ($cek->num_rows() < 1) {
            $this->session->set_flashdata('pesan', 'Maaf, NIK Tidak ditemukan');
            redirect('register');
        } else {

            if ($cek2 != '') {
                $this->session->set_flashdata('pesan', 'Maaf, Password sudah ada. </> Silahkan hubungi pengurus terkait');
                redirect('register');
            } else {
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $passNew = substr(str_shuffle($permitted_chars), 0, 10);
                $data = array(
                    "pass" => $passNew
                );

                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $passNew = substr(str_shuffle($permitted_chars), 0, 10);
                $data = array(
                    "pass" => $passNew
                );


                $this->M_Register->update_data('tb_santri', $data, $where);
                $infoData = $this->M_Register->cek_nik('tb_santri', $where)->row();
                if ($this->db->affected_rows() > 0) {
                    $psn = '
*INFORMASI AKUN eSANTRI* 

Detail Akun :

Nama : ' . $infoData->nama . '
Alamat : ' . $infoData->desa . ' - ' . $infoData->kec . ' - ' . $infoData->kab . '
Username : *' . $infoData->nis . '*
Password : *' . $infoData->pass . '*

*_Akun ini bersifat rahasia. dimohon untuk menyimpan akun ini dengan baik_*
*_Akun sudah bisa digunakan di Aplikasi atau di https://esantri.ppdwk.com/_*
Terimakasih';

                    $curl = curl_init();
                    curl_setopt_array(
                        $curl,
                        array(
                            CURLOPT_URL => 'http://8.215.26.187:3000/api/sendMessage',
                            CURLOPT_RETURNTRANSFER => true,
                            CURLOPT_ENCODING => '',
                            CURLOPT_MAXREDIRS => 10,
                            CURLOPT_TIMEOUT => 0,
                            CURLOPT_FOLLOWLOCATION => true,
                            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                            CURLOPT_CUSTOMREQUEST => 'POST',
                            CURLOPT_POSTFIELDS => 'apiKey=f4064efa9d05f66f9be6151ec91ad846&phone=' . $infoData->hp . '&message=' . $psn,
                        )
                    );
                    $response = curl_exec($curl);
                    curl_close($curl);

                    $this->session->set_flashdata('berhasil', 'Pendaftaran akun berhasil. Informasi </br> akun sudah dikirimkan ke No WA terdaftar');
                    redirect('register');
                }
            }
        }
    }
}