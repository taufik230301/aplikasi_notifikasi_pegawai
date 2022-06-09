<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends CI_Controller {

    public function __construct()
	{
		parent::__construct();
		$this->load->model('m_notifikasi');
    }
    

    public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

        $data['notifikasi'] = $this->m_notifikasi->read_all_notifikasi();
		$this->load->view('admin/notifikasi', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }

}