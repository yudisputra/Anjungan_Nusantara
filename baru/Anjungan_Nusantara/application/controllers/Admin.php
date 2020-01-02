<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct(){
		parent::__construct();
		//$this->load->model('');
	}

	var $ctrlname = 'Admin';		

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

		$this->load->view('admin/layouts/template',$data);
		
    }
    
    public function akun_pembeli()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "akun_pembeli/akunpembeli_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/akun_pembeli/ajax_crud', $data);
    }

    public function akun_penjual()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "akun_penjual/akunpenjual_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/akun_penjual/ajax_crud', $data);
    }

    public function akun_admin()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "akun_admin/akunadmin_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/akun_admin/ajax_crud', $data);
    }

    public function daftar_kategoridansub()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_kategoridansub/daftarkategoridansub_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_kategoridansub/ajax_crud', $data);
    }

    public function daftar_ukm()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_ukm/daftarukm_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_ukm/ajax_crud', $data);
    }

    public function daftar_produk()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_produk/daftarproduk_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_produk/ajax_crud', $data);
	}
	
	public function form_produk_baru()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_produk/buat_produk_baru",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
    }

    public function daftar_bank()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_bank/daftarbank_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_bank/ajax_crud', $data);
    }

    public function daftar_pesanan()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_pesanan/daftarpesanan_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_pesanan/ajax_crud', $data);
    }

    public function daftar_penjualan()
	{
		$data=[
			'title'=>"Halaman Admin",
			'ctrlname' => $this->ctrlname,
			'headers' => "dashboard/header",
			'contents' => "daftar_penjualan/daftarpenjualan_view",
			'footers' => "dashboard/footer",
			'data' => array()
		];
        $this->load->view('admin/layouts/template',$data);
        $this->load->view('admin/contents/daftar_penjualan/ajax_crud', $data);
    }

}
