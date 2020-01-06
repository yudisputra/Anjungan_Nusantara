<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	var $table = "login";

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		if($insert){
			return true;
		}
		return false;
	}

	public function checkemail($email)
	{
		$this->db->select('e_mail');
		$this->db->from($this->table);
		$this->db->where('e_mail',$email);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function login($email,$password)
    {
        // $this->db->select('login_id,e_mail,password,login_level,login_status,login_profile_id');
        // $this->db->from($this->table);
        // $this->db->where('e_mail', $email);
        // $this->db->where('password', $password);
        // $query = $this->db->get();
        $query =  $this->db->query("SELECT l.login_id,l.e_mail,l.password,l.login_level,l.login_status,l.login_profile_id, p.profile_nama FROM login as l inner join profile as p on l.login_profile_id = p.profile_id WHERE l.e_mail = '$email' AND l.password = '$password'");
        
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }                        
    }

    public function get_data_belum_verifikasi()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('login_status','Belum Terverifikasi');
		$query = $this->db->get();
		return $query->num_rows();
	}

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */