<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usaha_model extends CI_Model {


  var $table = "usaha";

   private $_table = "usaha";



	public function cek_usaha($id)
	{
		$query =  $this->db->query("SELECT * FROM usaha inner join profile on usaha.usaha_profile_id = profile.profile_id WHERE usaha.usaha_profile_id = '$id'");
		if($query->num_rows() == 0){
			return true;
		}
		else{
			return false;
		}
	}
       
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["usaha_id" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->usaha_id = uniqid();
        $this->usaha_nama = $post["usaha_name"];
        $this->usaha_alamat = $post["usaha_alamat"];
        $this->usaha_no_telp= $post["usaha_no_telp"];
        $this->usaha_foto = $this->_uploadImage();
        $this->usaha_profil = $post["usaha_profil"];
        $this->db->insert($this->_table, $this);
    }

    public function delete($id)
    {
        $this->_deleteImage($id);
        return $this->db->delete($this->_table, array("usaha_id" => $id));
    }

    private function _uploadImage()
    {
        $config['upload_path']      = './upload/images/';
        $config['allowed_types']    = 'gif|jpg|png';
        $config['file_name']        =$this->usaha_id;
        $config['overwrite']        =true;
        $config['max_size']         = 1024; //1Mb
        // $config['max_width']     =1024;
        // $config['max_height']    =768;
        

        $this->load->library('upload', $config);

        if($this->upload->do_upload('image')) {
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }


  public function get_next_id()
  {
    $query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'usaha'");
    return $query->row(0);
  }

  public function get_usaha_pemilik()
  {
    $query =  $this->db->query("SELECT * FROM usaha as u inner join profile as p on p.profile_id = u.usaha_profile_id");
    return $query->result();
  }

  public function insert($data)
  {
    $insert = $this->db->insert($this->table,$data);
    if($insert){
      return true;
    }
    else{
      return false;
    }
    
  }
  

	 public function getBuat_baru()
          {
            
              $query= $this->db->get('usaha');
              return $query->result();
          }

          public function getUpdate_Usaha($Id)
          {
            $this->db->where('id_user',$Id);
            $query = $this->db->get('usaha');
            return $query->result();
          }

        public function GetUser($data)
        {
          $query = $this->db->get_where('usaha', $data);
          return $query->result();
        }

        public function update($id, $data)
        {
          $this->db->where('usaha_id', $id);
          $this->db->update($this->table, $data);
      }

      public function update_ajax($id, $data)
      {
        $this->db->where('usaha_id', $id);
        $update = $this->db->update("usaha", $data);
        if($update){
          return true;
        }
        else{
          return false;
        }
      }

      public function hapus_ajax($id){
        $this->db->where('usaha_id', $id);
        $delete = $this->db->delete("usaha");
        if($delete){
          return true;
        }
        else{
          return false;
        }
      }

}

/* End of file Usaha_model.php */
/* Location: ./application/models/Usaha_model.php */