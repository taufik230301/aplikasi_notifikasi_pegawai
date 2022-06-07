<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lengkapi_Data extends CI_Controller {

	public function view_pegawai()
	{
		$this->load->view('pegawai/lengkapi_data');
	}
}
