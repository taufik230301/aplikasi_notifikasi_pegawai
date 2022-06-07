<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin/cuti');

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }
    
    public function view_hrd()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('hrd/cuti');

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}
    }

    public function view_pegawai()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {
		
		$this->load->view('pegawai/cuti');

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}
    }
    
}
