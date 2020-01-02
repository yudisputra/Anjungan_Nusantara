<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data = [
			'sidebar' => 'homepage/header',
			'content' => 'homepage/home',
			'footer' => 'homepage/footer',
		];
		$this->load->view('homepage/template',$data);
	}
}
