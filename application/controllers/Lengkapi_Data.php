<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lengkapi_Data extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function view_pegawai()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['pegawai'] = $this->m_user->read_all_data_user_by_id($this->session->userdata('id_user'));
		$this->load->view('pegawai/lengkapi_data', $data);

		
		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}

	}

	public function regist_input()
	{

		$nama_lengkap = $this->input->post('nama_lengkap');
		$jabatan = $this->input->post('jabatan');
		$title_posisi = $this->input->post('title_posisi');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$id = $this->session->userdata('id_user');

		// echo var_dump($nama_lengkap);
		// echo var_dump($jabatan);
		// echo var_dump($jenis_kelamin);
		// echo var_dump($no_telp);
		// echo var_dump($alamat);
		
		// die();

			$hasil = $this->m_user->update_user_detail($nama_lengkap, $jabatan, $title_posisi ,$jenis_kelamin, $no_telp, $alamat, $id);

			if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Lengkapi_Data/view_pegawai');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Lengkapi_Data/view_pegawai');
			}





	}
}
