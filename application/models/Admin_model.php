<?php
 
class Admin_model extends CI_model
{
	public function is_level()
    {
        return $this->session->userdata('level');
    }

    public function get($table)
    {
        $result = $this->db->get($table);
        return $result;
    }
    
	public function get_user($table){
		$email = $this->session->userdata['email'];
		$this->db->SELECT('*');
		$this->db->from('users');
		$this->db->where('users.email',$email);
		$result = $this->db->get();
        return $result;
	}

		public function tambah_data($data,$table){
		$this->db->insert($table,$data);
	}

    public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);

     }
    public function edit_data($where,$table){		
		return $this->db->get_where($table,$where);
	}

	public 	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
 
}

?>