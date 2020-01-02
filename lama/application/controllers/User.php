<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
		$this->load->model('Pembeli_model');
    }
    
    public function index()
    {
        $pembelian = $this->Pembeli_model->get_pesanan($this->session->userdata('profile_id'));
        $data = array(
            'pembelian' => $pembelian
        );
        $this->load->view('Pembeli/dashboard', $data);
    }

    public function upload($id){
        $pembelian = $this->Pembeli_model->get_detail_pesanan($id);
        $data = array(
            'detail_pembelian' => $pembelian
        );
        $this->load->view('Pembeli/upload', $data);
    }

}

/* End of file User.php */

?>