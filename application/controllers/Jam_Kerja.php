<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jam_Kerja extends CI_Controller {

	public function view_admin()
	{
		$this->load->view('admin/jam_kerja');
    }
    
    public function view_hrd()
	{
		$this->load->view('hrd/jam_kerja');
    }

    public function view_pegawai()
	{
		$this->load->view('pegawai/jam_kerja');
    }
    
}
