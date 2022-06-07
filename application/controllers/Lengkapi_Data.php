<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lengkapi_Data extends CI_Controller {

	public function view_pegawai()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$this->load->view('pegawai/lengkapi_data');

		
		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}

	}

	public function regist_input()
	{

		$nama_lengkap = $this->input->post('nama_lengkap');
		$jabatan = $this->input->post('jabatan');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$id = $this->session->userdata('username');

		// echo var_dump($nama_lengkap);
		// echo var_dump($jabatan);
		// echo var_dump($jenis_kelamin);
		// echo var_dump($no_telp);
		// echo var_dump($alamat);
		
		// die();

			$hasil = $this->m_user->update_user_detail($id, $username, $email, $pass, $id_user_level, $id_status_verifikasi, $id_status_aktif, $id_status_perpanjangan);

			if($hasil==false){
                $this->session->set_flashdata('eror_input','eror_input');
                redirect('Lengkapi_Data/view_pegawai');
			}else{
				$this->session->set_flashdata('input','input');
				redirect('Lengkapi_Data/view_pegawai');
			}





	}
}
