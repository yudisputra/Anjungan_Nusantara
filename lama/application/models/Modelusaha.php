<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Modelusaha extends CI_Model
{
 
     private $_table = "usaha";

    public $usaha_id;
    public $usaha_nama;
    public $usaha_alamat;
    public $usaha_no_telp;
    public $usaha_email;
    public $usaha_foto = "default.jpg";
    public $usaha_profil;
    public $usaha_profile_id;  

    public function rules()
    {
        return [
            ['field' => 'name',
            'label' => 'Name',
            'rules' => 'required'],

            ['field' => 'price',
            'label' => 'Price',
            'rules' => 'numeric'],
            
            ['field' => 'description',
            'label' => 'Description',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'Email',
            'rules' => 'required']

        ];
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

    public function update()
    {
          $post = $this->input->post();
        $this->usaha_id = $post["id"];
        $this->usaha_nama = $post["usaha_name"];
        $this->usaha_alamat = $post["usaha_alamat"];
        $this->usaha_no_telp= $post["usaha_no_telp"];
        $this->usaha_profil = $post["usaha_profil"];
        $this->db->insert($this->_table, $this);

        if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
        }
        $this->description = $post["description"];
        $this->db->update($this->_table, $this, array('usaha_id' => $post['id']));
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

       

    private function _deleteImage($id)
    {
         $usaha = $this->getById($id);
        if ($product->image != "default.jpg") {
            $filename = explode(".", $product->image)[0];
            return array_map('unlink', glob(FCPATH."upload/images/$filename.*"));
        }
    }
}
