<?php

class M_user extends CI_Model
{

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

}