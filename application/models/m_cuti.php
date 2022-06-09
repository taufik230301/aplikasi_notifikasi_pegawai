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

    public function read_all_data_cuti_by_id($id_user)
    {
        $hasil=$this->db->query("SELECT * FROM user 
        JOIN user_detail ON user.id_user_detail = user_detail.id_user_detail
        JOIN cuti ON user.id_user = cuti.id_user
        WHERE id_user_level=3 AND user.id_user='$id_user'");
        return $hasil->result_array();
    }

    public function create_cuti($id, $perihal, $awal_cuti, $berakhir_cuti)
    {
       $this->db->trans_start();

       $this->db->query("INSERT INTO cuti(id_user,perihal,tgl_dikirim,mulai,berakhir) VALUES ('$id','$perihal',NOW(),'$awal_cuti','$berakhir_cuti')");
       

       $this->db->trans_complete();
        if($this->db->trans_status()==true)
            return true;
        else
            return false;
    }

}