<?php
 
class Auth_model extends CI_Model
{
 
    public function cek_login($email)
    {
 
        $hasil = $this->db->where('email', $email)->limit(1)->get('users');
        if($hasil->num_rows() > 0){
            return $hasil->row();
        } else {
            return array();
        }
    }
 
    public function register($table, $data)
    {
        return $this->db->insert($table, $data);
    }
}
?>