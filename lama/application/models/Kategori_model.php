<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	var $table = "kategori";

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

	public function delete($data)
	{
		$delete = $this->db->delete($this->table,$data);
		if($delete){
			return true;
		}
		else{
			return false;
		}
	}

	public function update($data, $id)
	{
		$this->db->where('kategori_id', $id);
		$update = $this->db->update($this->table, $data);
		if($update){
			return true;
		}
		else{
			return false;
		}
	}

	public function get_kategori_dan_sub()
	{
		$query =  $this->db->query("SELECT k.kategori_id, k.kategori_nama, s.subkategori_id, s.subkategori_nama, s.subkategori_kategori_id from  subkategori as s inner join kategori as k on k.kategori_id = s.subkategori_kategori_id order by k.kategori_id");
		return $query->result();
	}

	public function kategori_populer()
	{
		$query =  $this->db->query("SELECT k.kategori_id,k.kategori_nama, COUNT(p.produk_id) from produk as p inner join subkategori as sk on p.produk_subkategori_id =sk.subkategori_id inner join kategori as k on k.kategori_id = sk.subkategori_kategori_id GROUP BY k.kategori_id");
		return $query->result();
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */