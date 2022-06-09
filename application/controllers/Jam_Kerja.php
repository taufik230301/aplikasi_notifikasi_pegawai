<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jam_Kerja extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_jam_kerja');
		$this->load->model('m_user');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->m_user->read_all_data_user();
			// $data['jam_kerja'] = $this->m_jam_kerja->read_all_data_jam_kerja();
			// echo var_dump($data);
			// die();

		$this->load->view('admin/jam_kerja', $data);


		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
		
	}
	
	public function detail_jam_kerja($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

			
		$data['jam_kerja'] = $this->m_jam_kerja->read_all_data_jam_kerja_by_id($id_user);

		// echo var_dump($data['jam_kerja']);
		// die();
		
			

		$this->load->view('admin/jam_kerja_detail', $data);
		

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
		
    }
    
    public function view_hrd()
	{

		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$data['user'] = $this->m_user->read_all_data_user();

		$this->load->view('hrd/jam_kerja', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
	}
	
	public function detail_jam_kerja_hrd($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

			
		$data['jam_kerja'] = $this->m_jam_kerja->read_all_data_jam_kerja_by_id($id_user);

		// echo var_dump($data['jam_kerja']);
		// die();
		
			

		$this->load->view('hrd/jam_kerja_detail', $data);
		

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
		
    }

    public function view_pegawai($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 3) {

		$data['jam_kerja'] = $this->m_jam_kerja->read_all_data_jam_kerja_by_id($id_user);
		$this->load->view('pegawai/jam_kerja', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }
    
}
