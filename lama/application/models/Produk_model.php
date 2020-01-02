<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	var $table = "produk";

	public function GetProduk($id)
    {
        $query =  $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_status, subka.subkategori_nama FROM produk as p inner join usaha as u on u.usaha_id = p.produk_usaha_id inner join profile as pr on pr.profile_id = u.usaha_profile_id inner join subkategori as subka on subka.subkategori_id = p.produk_subkategori_id where pr.profile_id=$id");
        return $query->result();
	}
	
	public function GetProdukForAdmin()
    {
        $query =  $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_status, subka.subkategori_nama, u.usaha_nama FROM produk as p inner join usaha as u on u.usaha_id = p.produk_usaha_id inner join profile as pr on pr.profile_id = u.usaha_profile_id inner join subkategori as subka on subka.subkategori_id = p.produk_subkategori_id order by p.produk_status = 'Menunggu'");
        return $query->result();
    }

    public function get_next_id()
	  {
	    $query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'produk'");
	    return $query->row(0);
	  }

	public function list_gambar($id, $data){
			$data_input = array('list_produk_id' => $id, 'list_gambar' => $data);
			$this->db->insert('list_gambar_produk',$data_input);
	}

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
	}

	public function get_foto_produk($data)
    {
          $query = $this->db->get_where('list_gambar_produk', $data);
          return $query->result();
    }

    public function update($id, $data)
        {
          $this->db->where('produk_id', $id);
          $this->db->update($this->table, $data);
	  }
	  
	  public function verifikasi($id)
	  {
			date_default_timezone_set('Asia/Jakarta');
			$date = date('Y-m-d h:i:s', time());
		  $data = array(
			  'produk_status' => "Disetujui",
			  'produk_rilis' => $date,
		  );
		  $this->db->where('produk_id', $id);
		  $this->db->update('produk', $data);
	  }

	  public function get_data_belum_disetujui()
	  {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('produk_status','Menunggu');
		$query = $this->db->get();
		return $query->num_rows();
	  }

	  public function get_produk_rilis()
	  {
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('produk_status','Disetujui');
		$query = $this->db->get();
		return $query->result();
	  }

	  public function get_produk_minggu()
     {
        $query =  $this->db->query("SELECT * FROM `produk` WHERE produk_status = 'Disetujui' ORDER BY produk_rilis DESC LIMIT 5");
        return $query->result();
	 }
	 
	 public function get_baru_terjual(){
		$query =  $this->db->query("SELECT * FROM `produk` WHERE produk_status = 'Disetujui' AND produk_terakhir_dibeli is not null order by produk_terakhir_dibeli desc limit 8");
        return $query->result();
	 }
	
	 public function get_produk_by_rating(){
		$query =  $this->db->query("SELECT r.rating_produk_id, AVG(r.rating_nilai) as rata, p.produk_id, p.produk_nama,p.produk_harga, p.produk_stock, p.produk_deskripsi, p.produk_foto_depan, p.produk_status,p.produk_status, p.produk_diupload,p.produk_rilis,p.produk_terakhir_dibeli,p.produk_subkategori_id,p.produk_usaha_id FROM rating as r inner join produk as p on r.rating_produk_id = p.produk_id ORDER BY rata  limit 8
		");
        return $query->result();
	 }

	 public function get_produk_jual_terbanyak(){
		$query =  $this->db->query("SELECT * FROM produk as p inner join subkategori as sk on p.produk_subkategori_id = sk.subkategori_id WHERE produk_status = 'Disetujui' AND produk_terjual > 0 order by produk_terjual DESC");
        return $query->result();
	 }

	 public function get_detail_produk($id)
	 {
		$query = $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_foto_depan, p.produk_status, subka.subkategori_nama, g.list_gambar FROM produk as p inner join subkategori as subka on p.produk_subkategori_id = subka.subkategori_id inner join list_gambar_produk as g on g.list_produk_id = p.produk_id where p.produk_id = $id");
		return $query->result();
	 }

	 public function get_data_ajax($id){
		$this->db->select('*');
		$this->db->from($this->table);
		$this->db->where('produk_id', $id);
		$query = $this->db->get();
		return $query->row(0);
	 }

	 public function update_ajax($id, $data)
      {
        $this->db->where('produk_id', $id);
        $update = $this->db->update("produk", $data);
        if($update){
          return true;
        }
        else{
          return false;
        }
	  }
	  
	  public function hapus_ajax($id){
        $this->db->where('produk_id', $id);
        $delete = $this->db->delete("produk");
        if($delete){
          return true;
        }
        else{
          return false;
        }
	  }
	  
	  public function GetProdukBySubKategori($id)
    {
        $query =  $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_foto_depan,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_status, subka.subkategori_nama FROM produk as p   inner join subkategori as subka on subka.subkategori_id = p.produk_subkategori_id where subka.subkategori_id=$id AND p.produk_status='Disetujui'");
        return $query->result();
	}

	public function get_kategori_produk_jual_terbanyak()
	{
        $query =  $this->db->query("SELECT COUNT(p.produk_id) as jumlah, s.subkategori_nama, s.subkategori_id FROM produk as p inner join subkategori as s on s.subkategori_id = p.produk_subkategori_id GROUP BY produk_subkategori_id ORDER BY jumlah DESC LIMIT 3");
        return $query->result();
	}

	public function produk_array($id){
		$query = $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_foto_depan,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_status, subka.subkategori_nama FROM produk as p inner join subkategori as subka on subka.subkategori_id = p.produk_subkategori_id where subka.subkategori_id = '$id'");
		return $query->result();
	}
	 
}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */