<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin/data_pegawai');

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
    
}
