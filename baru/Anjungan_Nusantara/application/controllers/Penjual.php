<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Kategori_model');
		$this->load->model('SubKategori_model');
		$this->load->model('Produk_model');
		$this->load->model('Usaha_model');
		$this->load->model('Bank_model');
		$this->load->model('Pembelian_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
		}
		else{
			echo '<script>alert("Anda Belum Login")</script>';
			redirect('Login','refresh');
		}
	}

	var $ctrlname = 'Penjual';		

	public function index()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "dashboard_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];

		$this->load->view('penjual/layouts/template',$data);
		
    }
    
	public function profil_toko()
	{
		$tipe_user = "Pembeli";
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		$data=[
			'title'=>"Halaman Data Pembeli",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "profil_toko/profiltoko_view",
			'footers' => "dashboard/footer",
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'data' => array()
		];
        $this->load->view('penjual/layouts/template',$data);
        $this->load->view('penjual/contents/profil_toko/ajax_crud', $data);
    }

    public function update_profil()
	{
		$tipe_user = "Pembeli";
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		$data=[
			'title'=>"Halaman Data Pembeli",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "profil_toko/updateprofil_view",
			'footers' => "dashboard/footer",
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'data' => array()
		];
        $this->load->view('penjual/layouts/template',$data);
        $this->load->view('penjual/contents/profil_toko/ajax_crud', $data);
    }

    public function produk()
	{
		$tipe_user = "Penjual";
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		$data=[
			'title'=>"Halaman Data Penjual",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "produk/produk_view",
			'footers' => "dashboard/footer",
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'data' => array()
		];
        $this->load->view('penjual/layouts/template',$data);
        $this->load->view('penjual/contents/produk/ajax_crud', $data);
    }

    public function penjualan()
	{
		$tipe_user = "Admin";
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		$data=[
			'title'=>"Halaman Data Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "penjualan/penjualan_view",
			'footers' => "dashboard/footer",
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'data' => array()
		];
        $this->load->view('penjual/layouts/template',$data);
        $this->load->view('penjual/contents/penjualan/ajax_crud', $data);
	}

}
