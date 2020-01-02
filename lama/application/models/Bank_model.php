<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Bank_model extends CI_Model {

    var $table = "bank";
    private $_table = "bank";

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
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["bank_id" => $id])->result();
    }

    public function update_ajax($id, $data)
      {
        $this->db->where('bank_id', $id);
        $update = $this->db->update("bank", $data);
        if($update){
          return true;
        }
        else{
          return false;
        }
      }

      public function hapus_ajax($id){
        $this->db->where('bank_id', $id);
        $delete = $this->db->delete("bank");
        if($delete){
          return true;
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

}

/* End of file Bank_model.php */
