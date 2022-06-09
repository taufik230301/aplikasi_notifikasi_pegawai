<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
	}

	public function index()
	{
		$this->load->view('register');
	}

	public function register_proses()
	{
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$re_password = $this->input->post('re_password');
		$id_user_level = 3;
		$id_status_verifikasi = 1;
		$random_num = rand(1, 9999);
		$id = md5($username.$password.$id_user_level.$random_num);
		// echo var_dump($username);
		// echo var_dump($email);
		// echo var_dump($password);
		// echo var_dump($re_password);
		// die();

		if($password == $re_password)
        {
            $hasil = $this->m_user->pendaftaran_user($id, $username, $email, $password, $id_user_level, $id_status_verifikasi);

            if($hasil==false){
                $this->session->set_flashdata('eror_register','eror_register');
                redirect('register/index');
			}else{
				$this->session->set_flashdata('input_register','input_register');
				redirect('login/index');
            }

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('register/index');
        }
	}
}