<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_cuti');
		$this->load->model('m_notifikasi');
	}

	public function view_admin()
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->m_user->read_all_data_user();

		$this->load->view('admin/data_pegawai', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
	}
	
	public function detail_pegawai($id_user)
	{
		if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 1) {

		$data['user'] = $this->m_user->read_all_data_user_by_id($id_user);
	

		$this->load->view('admin/data_pegawai_detail', $data);

		}else{

			$this->session->set_flashdata('loggin_no_session','loggin_no_session');
			redirect('Login/index');

		}
    }
    
    public function view_hrd()
	{

	if ($this->session->userdata('logged_in') == true AND $this->session->userdata('id_user_level') == 2) {

		$data['user'] = $this->m_user->read_all_data_user();

		$this->load->view('hrd/data_pegawai', $data);

	}else{

		$this->session->set_flashdata('loggin_no_session','loggin_no_session');
		redirect('Login/index');

	}

	}
	
	public function verifikasi_data()
	{
		$id = $this->input->post('id_user');
		$id_status_verifikasi = 2;

		$hasil = $this->m_user->update_id_status_verifikasi($id_status_verifikasi, $id);

			if($hasil==false){
                $this->session->set_flashdata('eror_verifikasi','eror_verifikasi');
                redirect('Pegawai/view_admin');
			}else{
				$this->session->set_flashdata('verifikasi','verifikasi');
				redirect('Pegawai/view_admin');
			}
	}

	public function notifikasi_cuti()
	{
		$id = $this->input->post('id_user');
		$mulai_bekerja = $this->input->post('mulai_bekerja');
		$awal_cuti = $this->input->post('awal_cuti');
		$berakhir_cuti = $this->input->post('berakhir_cuti');
		$perihal = $this->input->post('perihal');


		$akhir_bekerja = date_create($berakhir_cuti);
		
		$mulai_kerja = date_add($akhir_bekerja, date_interval_create_from_date_string("1 days"));

		$mulai_kerja_karyawan = date_format($mulai_kerja, "Y-m-d");
		
		
		$akhir_kerja = date_add($mulai_kerja, date_interval_create_from_date_string("70 days"));
		

		$akhir_kerja_karyawan = date_format($akhir_kerja, "Y-m-d");


		$hasil_1 = $this->m_cuti->create_cuti($id, $perihal, $awal_cuti, $berakhir_cuti);
		$hasil_2 = $this->m_user->update_tgl_kerja_pegawai($id, $mulai_kerja_karyawan, $akhir_kerja_karyawan);

			if($hasil_1 AND $hasil_2==false){
                $this->session->set_flashdata('eror_input_cuti','eror_input_cuti');
                redirect('Pegawai/detail_pegawai/'.$id);
			}else{
				$this->session->set_flashdata('input_cuti','input_cuti');
				redirect('Pegawai/detail_pegawai/'.$id);
			}
		

	}

	public function notifikasi_jam_kerja()
	{
		$id = $this->input->post('id_user');
		$pesan = $this->input->post('pesan');
		$id_kategori_notifikasi = 2;

		$hasil_2 = $this->m_notifikasi->insert_notifikasi($pesan, $id, $id_kategori_notifikasi);
		$hasil_1 = $this->m_user->update_jam_kerja($id);

			if($hasil_1 AND $hasil_2 == false){
                $this->session->set_flashdata('eror_input_jam_kerja','eror_input_jam_kerja');
                redirect('Jam_Kerja/view_admin');
			}else{
				$this->session->set_flashdata('input_jam_kerja','input_jam_kerja');
				redirect('Jam_Kerja/view_admin');
			}
	}
    
}