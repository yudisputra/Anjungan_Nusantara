<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');	
	}

	public function index()
	{
		$this->load->view('Register/login_new');
	}

	public function logout()
    {
        $session_data=$this->session->userdata('logged_in');
        // var_dump($session_data);
        // $this->User->setstatus($session_data["id"],"Offline");
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect('Login','refresh');
    }

    public function cekDb($password)
    {
        $email = $this->input->post('email'); 
        $result = $this->Login_model->login($email,$password);
        if($result){
           $session_array = array();
                foreach ($result as $key) {
                    $session_array = array(
                        'id'=>$key->login_id,
                        'e_mail'=>$key->e_mail,
                        'level'=>$key->login_level,
                        'status' => $key->login_status,
                        'profile_id' => $key->login_profile_id,
                        'username' =>  $key->profile_nama,
                        'logged_in' => true
                    );
                    // $this->session->set_userdata($session_array);
                }

                if($session_array["status"] == "Belum Terverifikasi"){
                	 $this->form_validation->set_message('cekDb',"Akun Sedang Tahap Verifikasi");
                	 return false;
                }
                else{
                	$this->session->set_userdata($session_array);
                	return true;
                }
   
            }
            else{
                $this->form_validation->set_message('cekDb',"Login Gagal");
                return false;
            }
    }

        public function cekLogin()
        {
            $this->form_validation->set_rules('email', 'E-mail', 'trim|required');
            $this->form_validation->set_rules('password', 'Password', 'trim|required|callback_cekDb');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('Register/login_new');
            } else {
                $session_data=$this->session->userdata('logged_in');
                $session_data_level=$this->session->userdata('level');

                if($session_data_level == "Admin"){
                	redirect('Admin','refresh');
                }
                else if($session_data_level == "Penjual"){
                	redirect('Penjual','refresh');
                }
                else{
                	redirect('Welcome','refresh');
                }
                // var_dump($session_data_level); 
                
            }
        }
}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */