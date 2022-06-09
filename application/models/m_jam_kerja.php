<?php

class M_jam_kerja extends CI_Model
{

    
    public function read_all_data_jam_kerja_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN jam_kerja ON user.id_user = jam_kerja.id_user
        JOIN hari ON jam_kerja.id_hari = hari.id_hari WHERE id_user_level=3 AND user.id_user ='$id_user'");
        return $hasil->result_array();
    }

    public function tambah_jam_kerja($jam_kerja_start, $jam_kerja_end, $id_hari ,$id)
    {

        $this->db->trans_start();

       $this->db->query("INSERT INTO jam_kerja(jam_kerja_start,jam_kerja_end,id_hari,id_user) VALUES ('$jam_kerja_start','$jam_kerja_end','$id_hari','$id')");
       

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}