<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->model('m_jam_kerja');
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

	public function edit_pegawai_admin()
	{
		$id = $this->input->post('id_user');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$username = $this->input->post('username');
		$email = $this->input->post('email');
		$jabatan = $this->input->post('jabatan');
		$title_posisi = $this->input->post('title_posisi');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$mulai_bekerja = $this->input->post('mulai_bekerja');
		$akhir_bekerja = $this->input->post('akhir_bekerja');

		// echo var_dump($nama_lengkap);
		// echo var_dump($username);
		// echo var_dump($email);
		// echo var_dump($jabatan);
		// echo var_dump($title_posisi);
		// echo var_dump($jenis_kelamin);
		// echo var_dump($no_telp);
		// echo var_dump($mulai_bekerja);
		// die();

			$hasil = $this->m_user->update_user($nama_lengkap, $username, $email ,$jabatan, $title_posisi ,$jenis_kelamin, $no_telp, $alamat, $mulai_bekerja, $akhir_bekerja, $id);

			if($hasil==false){
                $this->session->set_flashdata('eror_edit','eror_edit');
                redirect('Pegawai/detail_pegawai_admin/'.$id);
			}else{
				$this->session->set_flashdata('edit','edit');
				redirect('Pegawai/detail_pegawai_admin/'.$id);
			}

	}

	public function hapus_pegawai_admin()
	{
		$id = $this->input->post('id_user');

		// echo var_dump($nama_lengkap);
		// echo var_dump($username);
		// echo var_dump($email);
		// echo var_dump($jabatan);
		// echo var_dump($title_posisi);
		// echo var_dump($jenis_kelamin);
		// echo var_dump($no_telp);
		// echo var_dump($alamat);
		// die();

			$hasil = $this->m_user->delete_user($id);

			if($hasil==false){
                $this->session->set_flashdata('eror_delete','eror_delete');
                redirect('Pegawai/view_admin');
			}else{
				$this->session->set_flashdata('delete','delete');
				redirect('Pegawai/view_admin');
			}

	}
	
	public function detail_pegawai_admin($id_user)
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
		$pesan = $this->input->post('pesan');
		$email = $this->input->post('email');
		$id_status_verifikasi = 2;

	  $this->load->library('email');
      $this->load->config('email');

          
      $from = $this->config->item('smtp_user');
      
      $subject = 'Laporan Status Verifikasi karyawan PT.Dizamatra Powerindo';
      

      $this->email->set_newline("\r\n");
      $this->email->from($from);
      $this->email->to($email);
      $this->email->subject($subject);
	  $this->email->message($pesan);

	    if ($this->email->send()) {
			$hasil = $this->m_user->update_id_status_verifikasi($id_status_verifikasi, $id);

			if($hasil==false){
                $this->session->set_flashdata('eror_verifikasi','eror_verifikasi');
                redirect('Pegawai/view_admin');
			}else{
				$this->session->set_flashdata('verifikasi','verifikasi');
				redirect('Pegawai/view_admin');
			}
		} else {
			$this->session->set_flashdata('error_send','error_send');
			redirect('Pegawai/view_admin');
		  }
	}

	public function notifikasi_cuti()
	{
		$id = $this->input->post('id_user');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$mulai_bekerja = $this->input->post('mulai_bekerja');
		$awal_cuti = $this->input->post('awal_cuti');
		$berakhir_cuti = $this->input->post('berakhir_cuti');
		$email = $this->input->post('email');
		$perihal = $this->input->post('perihal');


		$akhir_bekerja = date_create($berakhir_cuti);
		
		$mulai_kerja = date_add($akhir_bekerja, date_interval_create_from_date_string("1 days"));

		$mulai_kerja_karyawan = date_format($mulai_kerja, "Y-m-d");
		
		
		$akhir_kerja = date_add($mulai_kerja, date_interval_create_from_date_string("70 days"));
		

		$akhir_kerja_karyawan = date_format($akhir_kerja, "Y-m-d");

		
		$data =array(
			"cuti" => array(
				array(
				"nama_lengkap" =>"Taufik",
				"perihal" => "$perihal",
				"mulai" => "$awal_cuti",
				"berakhir" => "$berakhir_cuti"
				)
			)
		); 
		
		$body = $this->load->view('cuti.php',$data,TRUE);

		$this->load->library('email');
		$this->load->config('email');
  
			
		$from = $this->config->item('smtp_user');
		
		$subject = 'Laporan Roster karyawan PT.Dizamatra Powerindo';
		
		
		
  
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($email);
		$this->email->subject($subject);
		$this->email->message($body);


		if ($this->email->send()) {
		$hasil_1 = $this->m_cuti->create_cuti($id, $perihal, $awal_cuti, $berakhir_cuti);
		$hasil_2 = $this->m_user->update_tgl_kerja_pegawai($id, $mulai_kerja_karyawan, $akhir_kerja_karyawan);


		if($hasil_1 AND $hasil_2==false){
                $this->session->set_flashdata('eror_input_cuti','eror_input_cuti');
                redirect('Pegawai/detail_pegawai_admin/'.$id);
			}else{
				$this->session->set_flashdata('input_cuti','input_cuti');
				redirect('Pegawai/detail_pegawai_admin/'.$id);
			}
		
		} else {
			$this->session->set_flashdata('error_send','error_send');
			redirect('Pegawai/detail_pegawai_admin/'.$id);
		  }

	}

	public function notifikasi_jam_kerja()
	{
		$id = $this->input->post('id_user');
		$pesan = $this->input->post('pesan');
		$id_kategori_notifikasi = 2;
		$email = $this->input->post('email');

		$data['jam_kerja'] = $this->m_jam_kerja->read_all_data_jam_kerja_by_id($id);
		
		$data['total_jam_kerja'] = $data['total_jam_kerja'] = $this->m_jam_kerja->count_data_jam_kerja_by_id($id);

		// echo $data['total_jam_kerja']['total_jam_kerja'];
		// die();
		if($data['total_jam_kerja']['total_jam_kerja'] == 6){

		
		// $pesan = "";
		// $pesan_hari = "<table>
		// $pesan</table>";
		// foreach($data['jam_kerja'] as $jam_kerja){
		// 	$hari = $jam_kerja['hari'];
		// 	$mulai = $jam_kerja['jam_kerja_start'];
		// 	$akhir= $jam_kerja['jam_kerja_end'];
		// 	$pesan.="<tr><td>$hari</td><td>$mulai</td><td>$akhir</td></tr>";

		// }

		

		
		$body = $this->load->view('jam_kerja.php',$data,TRUE);
	
		

		$this->load->library('email');
		$this->load->config('email');
  
			
		$from = $this->config->item('smtp_user');
		
		$subject = 'Laporan Jam kerja karyawan PT.Dizamatra Powerindo';
		
		
		
  
		$this->email->set_newline("\r\n");
		$this->email->from($from);
		$this->email->to($email);
		$this->email->subject($subject);
		
		$this->email->message($body);
		
		

		if ($this->email->send()) {
		$hasil_2 = $this->m_notifikasi->insert_notifikasi($pesan, $id, $id_kategori_notifikasi);
		$hasil_1 = $this->m_user->update_jam_kerja($id);
			if($hasil_1 AND $hasil_2 == false){
                $this->session->set_flashdata('eror_input_jam_kerja','eror_input_jam_kerja');
                redirect('Jam_Kerja/view_admin');
			}else{
				$this->session->set_flashdata('input_jam_kerja','input_jam_kerja');
				redirect('Jam_Kerja/view_admin');
			}
			} else {
			$this->session->set_flashdata('error_send','error_send');
			redirect('Jam_Kerja/view_admin');
		  }

		}else{
			$this->session->set_flashdata('error_send_no_jam_kerja','error_send_no_jam_kerja');
			redirect('Jam_Kerja/view_admin');
		}
	}
    
}