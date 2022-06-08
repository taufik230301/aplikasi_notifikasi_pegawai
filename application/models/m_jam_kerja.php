<?php

class M_jam_kerja extends CI_Model
{

    
    public function read_all_data_jam_kerja_by_id()
    {
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN jam_kerja ON user.id_user = jam_kerja.id_user WHERE id_user_level=3");
        return $hasil->result_array();
    }

}