<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/data_pegawai');
    }
    
    public function view_hrd()
	{
		$this->load->view('hrd/data_pegawai');
    }
    
}
