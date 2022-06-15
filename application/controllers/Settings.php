<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Settings extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->model('m_user');
    }
    
	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$this->load->view('admin/settings');

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }

    public function proses_settings_admin()
    {
        $id = $this->session->userdata('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $re_password = $this->input->post('re_password');

        if($password == $re_password)
        {
            $hasil = $this->m_user->edit_user($id, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_edit','eror_edit');
                redirect('settings/view_admin');
			}else{
				$this->session->set_flashdata('edit','edit');
				redirect('settings/view_admin');
            }

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('settings/view_admin');
        }


    }

    public function view_hrd()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$this->load->view('hrd/settings');

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }

    public function proses_settings_hrd()
    {
        $id = $this->session->userdata('id_user');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $re_password = $this->input->post('re_password');

        if($password == $re_password)
        {
            $hasil = $this->m_user->edit_user($id, $username, $password);

            if($hasil==false){
                $this->session->set_flashdata('eror_edit','eror_edit');
                redirect('settings/view_hrd');
			}else{
				$this->session->set_flashdata('edit','edit');
				redirect('settings/view_hrd');
            }

        }else{
            $this->session->set_flashdata('password_err','password_err');
			redirect('settings/view_hrd');
        }


    }
}