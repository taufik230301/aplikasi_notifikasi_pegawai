<?php

class M_cuti extends CI_Model
{

    
    public function read_all_data_cuti()
    {
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN cuti ON user.id_user = cuti.id_user
        WHERE id_user_level=3");
        return $hasil->result_array();
    }

}