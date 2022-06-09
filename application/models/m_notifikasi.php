<?php

class M_notifikasi extends CI_Model
{

    public function read_all_notifikasi()
    {
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN notifikasi ON user.id_user = notifikasi.id_user_penerima
        JOIN kategori_notifikasi ON kategori_notifikasi.id_kategori_notifikasi = notifikasi.id_kategori_notifikasi
        WHERE id_user_level=3");
        return $hasil->result_array();
    }

    public function insert_notifikasi($pesan, $id, $id_kategori_notifikasi)
    {
        $this->db->trans_start();

       $this->db->query("INSERT INTO notifikasi(pesan,id_user_penerima,id_kategori_notifikasi,date_created) VALUES ('$pesan','$id','$id_kategori_notifikasi',NOW())");
       

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }


}