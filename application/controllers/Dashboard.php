<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_jam_kerja');
		$this->load->model('m_cuti');
	}

	public function dashboard_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['total_pegawai'] = $this->m_user->count_data_user();
		$data['total_jam_kerja'] = $this->m_jam_kerja->count_data_jam_kerja();
		$data['total_cuti'] = $this->m_cuti->count_data_cuti();


		$this->load->view('admin/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}

    }
    
    public function dashboard_hrd()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$data['total_pegawai'] = $this->m_user->count_data_user();
		$data['total_jam_kerja'] = $this->m_jam_kerja->count_data_jam_kerja();
		$data['total_cuti'] = $this->m_cuti->count_data_cuti();

		$this->load->view('hrd/dashboard', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}

    }
    
    public function dashboard_pegawai()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$this->load->view('pegawai/dashboard');

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
	}
}
