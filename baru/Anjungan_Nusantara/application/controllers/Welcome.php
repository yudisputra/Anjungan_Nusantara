<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
		$this->load->model('Subkategori_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
		}
		
	}

	public function index()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$produk = $this->Produk_model->get_produk_rilis();
		$produk_minggu_ini = $this->Produk_model->get_produk_minggu();
		$produk_baru_terjual = $this->Produk_model->get_baru_Terjual();
		$produk_rating = $this->Produk_model->get_produk_by_rating();
		$kategori_populer = $this->Kategori_model->kategori_populer();
		$terjual_terbanyak = $this->Produk_model->get_produk_jual_terbanyak();
		$produk_penjualan_Terbaik_tiga_kategori = array();
		$tiga_subkategori_terbaik = $this->Produk_model-> get_kategori_produk_jual_terbanyak();
		foreach($tiga_subkategori_terbaik  as $key){
			$data = array();
			$data = $this->Produk_model->produk_array($key->subkategori_id);
			array_push($produk_penjualan_Terbaik_tiga_kategori,$data);
		}
		
		$data = array(
			'tiga_subkategori_terbaik' => $tiga_subkategori_terbaik,
			'produk_terbanyak_tiga_kategori' => $produk_penjualan_Terbaik_tiga_kategori,
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
			'produk_minggu_ini' => $produk_minggu_ini,
			'produk_baru_terjual' => $produk_baru_terjual,
			'produk_rating' => $produk_rating,
			'kategori_populer' => $kategori_populer,
			'terjual_terbanyak' => $terjual_terbanyak,
			'header' => 'homepage/header',
			'content' => 'homepage/home',
			'footer' => 'homepage/footer',
		);
		$this->load->view('homepage/template',$data);
	}

	public function Keranjang(){
		$data = [
			'header' => 'homepage/header',
			'content' => 'homepage/keranjang',
			'footer' => 'homepage/footer',
		];
		$this->load->view('homepage/template',$data);
		
	}

	public function detail_produk($id){
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$detail = $this->Produk_model->get_detail_produk($id);
		$data = array(
			'detail' => $detail,
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'header' => 'homepage/header',
			'content' => 'homepage/detail',
			'footer' => 'homepage/footer',
		);
		$this->load->view('homepage/template', $data);
	}

	public function SemuaProduk(){
		$data = [
			'header' => 'homepage/header_produk',
			'content' => 'homepage/allproduk',
			'footer' => 'homepage/footer',
		];
		$this->load->view('homepage/template',$data);
		
	}
}
