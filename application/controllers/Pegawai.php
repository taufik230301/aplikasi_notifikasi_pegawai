<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->m_user->read_all_data_user();

		$this->load->view('admin/data_pegawai', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
	}
	
	public function detail_pegawai($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->m_user->read_all_data_user_by_id($id_user);
	

		$this->load->view('admin/data_pegawai_detail', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }
    
    public function view_hrd()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('hrd/data_pegawai');

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}

	}
	
	public function verifikasi_data()
	{
		$id = $this->input->post('id_user');
		$id_status_verifikasi = 2;

		$hasil = $this->m_user->update_id_status_verifikasi($id_status_verifikasi, $id);

			if($hasil==false){
                $this->session->set_flashdata('eror_verifikasi','eror_verifikasi');
                redirect('Pegawai/view_admin');
			}else{
				$this->session->set_flashdata('verifikasi','verifikasi');
				redirect('Pegawai/view_admin');
			}
	}
    
}
