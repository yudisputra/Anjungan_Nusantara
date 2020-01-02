<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	var $table = "profile";

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		if($insert){
			return true;
		}
		return false;
	}

	public function getforadmin($id){
		$query =  $this->db->query("SELECT * FROM profile where profile_id='$id'");
		return $query->result();
	}

	public function get_next_id()
	{
		$query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'login'");
		return $query->row(0);
	}

	public function profile_and_login($level = null, $id = null)
	{
		if($level != null){
			$query =  $this->db->query("SELECT * FROM login inner join profile on login.login_profile_id = profile.profile_id WHERE login.login_level = '$level'");
		}
		else if($id != null){
			$query =  $this->db->query("SELECT * FROM login inner join profile on login.login_profile_id = profile.profile_id WHERE profile.profile_id = '$id'");
		}
		
		return $query->result();
	}

    public function profile_and_login_belum_verifikasi_dahulu()
    {
        $query =  $this->db->query("SELECT * FROM login inner join profile on login.login_profile_id = profile.profile_id WHERE login.login_level = 'Penjual' order by login.login_status ASC");
        
        return $query->result();
    }

	public function update_profile($id, $nama, $hape, $alamat, $email, $password)
    {
    	$data1 = array(
    		'profile_nama' => $nama,
    		'profile_no_hp' => $hape,
    		'profile_alamat' => $alamat
    	);
        $this->db->where('profile_id', $id);
        $this->db->update('profile', $data1);

        $data2 = array(
        	'e_mail' => $email,
        	'password' => $password
        );
        $this->db->where('login_profile_id', $id);
        $this->db->update('login', $data2);
    }

    public function verifikasi($id)
    {
        $data = array(
            'login_status' => "Terverifikasi",
        );
        $this->db->where('login_id', $id);
        $this->db->update('login', $data);
    }

    public function buat_profile($id, $nama, $hape, $alamat, $email, $password, $status, $level)
    {
    	$data1 = array(
    		'profile_id' => $id,
    		'profile_nama' => $nama,
    		'profile_no_hp' => $hape,
    		'profile_alamat' => $alamat
    	);
        $this->db->insert('profile', $data1);

        $data2 = array(
        	'e_mail' => $email,
        	'password' => $password,
        	'login_status' => $status,
        	'login_profile_id' => $id,
            'login_level' => $level
        );
        $this->db->insert('login', $data2);
    }

	public function hapus_profile($id)
    {
        $this->db->where('profile_id', $id);
        $this->db->delete($this->table);
    }

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */