<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_cuti');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['cuti'] = $this->m_cuti->read_all_data_cuti();
		$this->load->view('admin/cuti', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }
    
    public function view_hrd()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$data['cuti'] = $this->m_cuti->read_all_data_cuti();
		$this->load->view('hrd/cuti', $data);

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}
    }

    public function view_pegawai($id_user)
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
		
		$data['cuti'] = $this->m_cuti->read_all_data_cuti_by_id($id_user);
		$this->load->view('pegawai/cuti', $data);

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}
    }
    
}
