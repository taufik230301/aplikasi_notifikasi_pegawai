<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function dashboard_admin()
	{
		$this->load->view('admin/dashboard');
    }
    
    public function dashboard_hrd()
	{
		$this->load->view('hrd/dashboard');
    }
    
    public function dashboard_pegawai()
	{
		$this->load->view('pegawai/dashboard');
	}
}
