<?php

class M_user extends CI_Model
{

    public function count_data_user()
    {
        $hasil=$this->db->query("SELECT COUNT(id_user) as total_pegawai FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level=3");
        return $hasil->row_array();
    }


    public function read_all_data_user()
    {
        
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level=3 ");
        return $hasil->result_array();
        
    }

  


    public function read_all_data_user_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE id_user_level=3 AND user.id_user='$id_user'");
        return $hasil->result_array();
    }

    public function pendaftaran_user($id, $username, $email, $password, $id_user_level, $id_status_verifikasi)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO user(id_user,username,password,email,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','$id_user_level','$id')");
       $this->db->query("INSERT INTO user_detail(id_user_detail, id_status_verifikasi) VALUES ('$id', '$id_status_verifikasi')");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function insert_pegawai($id, $username, $email, $password, $nama_lengkap, $jabatan, $title_posisi, $jenis_kelamin, $no_telp, $alamat)
    {
        $this->db->trans_start();

        $this->db->query("INSERT INTO user(id_user,username,password,email,id_user_level, id_user_detail) VALUES ('$id','$username','$password','$email','3','$id')");
        $this->db->query("INSERT INTO user_detail(id_user_detail, nama_lengkap, jabatan, title_posisi, jenis_kelamin, no_telp, alamat, id_status_verifikasi) VALUES ('$id', '$nama_lengkap','$jabatan','$title_posisi','$jenis_kelamin','$no_telp','$alamat','1')");
 
        $this->db->trans_complete();
         if($this->db->trans_status()==true)
             return true;
         else
             return false;
    }

    public function delete_user($id_user)
    {
       $this->db->trans_start();

       $this->db->query("DELETE FROM user WHERE id_user='$id_user'");
       $this->db->query("DELETE FROM user_detail WHERE id_user_detail='$id_user'");
       $this->db->query("DELETE FROM cuti WHERE id_user='$id_user'");
       $this->db->query("DELETE FROM jam_kerja WHERE id_user='$id_user'");
       $this->db->query("DELETE FROM notifikasi WHERE id_user_penerima='$id_user'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function cek_login($username)
    {
        
        $hasil=$this->db->query("SELECT * FROM user JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail WHERE username='$username'");
        return $hasil;
        
    }

    public function update_user_detail($nama_lengkap, $jabatan, $title_posisi ,$jenis_kelamin, $no_telp, $alamat, $id)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user_detail SET nama_lengkap='$nama_lengkap', jabatan='$jabatan', title_posisi='$title_posisi', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat' WHERE id_user_detail='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_user($nama_lengkap, $username, $email ,$jabatan, $title_posisi ,$jenis_kelamin, $no_telp, $alamat, $mulai_bekerja, $akhir_bekerja, $id)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user SET username='$username', email='$email' WHERE id_user='$id'");
       $this->db->query("UPDATE user_detail SET nama_lengkap='$nama_lengkap', jabatan='$jabatan', title_posisi='$title_posisi', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', alamat='$alamat', mulai_bekerja='$mulai_bekerja', akhir_bekerja='$akhir_bekerja' WHERE id_user_detail='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function edit_user($id, $username, $password)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user SET username='$username', password='$password' WHERE id_user='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_id_status_verifikasi($id_status_verifikasi, $id)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user_detail SET id_status_verifikasi='$id_status_verifikasi' WHERE id_user_detail='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_tgl_kerja_pegawai($id, $mulai_bekerja, $akhir_bekerja)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user_detail SET mulai_bekerja='$mulai_bekerja', akhir_bekerja='$akhir_bekerja' WHERE id_user_detail='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

    public function update_jam_kerja($id)
    {
       $this->db->trans_start();

       $this->db->query("UPDATE user_detail SET updated_jam_kerja = NOW() WHERE id_user_detail='$id'");

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }
    
}