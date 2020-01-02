<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	
	public function Loginakun()
	{
		$this->load->view('login/berandalogin');
	}

	public function Daftarakun()
	{
		$this->load->view('login/daftar');
	}
}
