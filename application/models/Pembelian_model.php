<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Pembelian_model extends CI_Model {

    var $table = "pembelian";
    private $_table = "pembelian";

    public function get_all()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}
		else{
			return false;
		}
    }

    public function getforadmin(){
        $query = $this->db->query("SELECT * FROM pembelian as p inner join profile as pr on p.id_pembeli = pr.profile_id");
		return $query->result();
    }

    public function insert($data)
	{
        $this->db->insert($this->table,$data);
        $insert_id = $this->db->insert_id();
		return $insert_id;
		
    }

    public function insert_detail($data){
        $this->db->insert("daftar_pembelian",$data);
		return true;
    }

    public function getbyid($id)
    {
    	$query = $this->db->query("SELECT * FROM pembelian WHERE id_pembelian = $id");
		return $query->result();
    }

    public function getbarang($id)
    {
    	$query = $this->db->query("SELECT * FROM pembelian WHERE id_pembelian = $id");
		return $query->result();
    }

    public function gantistatus($id, $data)
      {
        $this->db->where('id_pembelian', $id);
        $update = $this->db->update("pembelian", $data);
        if($update){
          return true;
        }
        else{
          return false;
        }
	  }
}

/* End of file Pembelian_model.php */
