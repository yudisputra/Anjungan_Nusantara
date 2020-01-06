<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keranjang extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
		$this->load->model('Subkategori_model');
		$this->load->library('cart');
		$this->load->helper('string');
		$this->load->helper('date');
		$this->load->model('Bank_model');
		$this->load->model('Pembelian_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
		}
		
	}

	public function index()
	{
		$list_bank = $this->Bank_model->get_all();
		$data = array( 
			'list_bank' => $list_bank
		);
		$this->load->view('home/keranjang', $data);
	}

	public function tambah(){
		
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$qty = $this->input->post('qty');
		$foto = $this->input->post('fotoproduk');

		$data = array(
			'id'      => $id,
			'qty'     => $qty,
			'price'   => $harga,
			'name'    => $nama,
			'foto'	 => $foto
		);
	
		$this->cart->insert($data);
		echo json_encode("Berhasil");
	}

	public function reset_keranjang(){
		$this->cart->destroy();
	}

	public function checkout(){
		$bank = $this->input->post('bank');
		$databank = $this->Bank_model-> getById($bank);
		$item = $this->cart->contents($newest_first=false );
		$total = $this->cart->total();
		$data = array(
			'bank' => $bank,
			'item' => $item,
			'total' => $total,
			'databank' => $databank
		);

		$this->load->view('home/checkout', $data);
	}

	public function pesan(){
		$id_pembeli = $this->session->userdata('profile_id');
		$nama = $this->input->post('nama');
		$hape = $this->input->post('hape');
		$alamat = $this->input->post('alamat');
		$total = $this->cart->total();
		$bank = $this->input->post('bank');
		$namabank = $this->input->post('namabank');
		$nextidpembelian = random_string('basic',10);
		$kode = $namabank.$nextidpembelian;
		$format = "%Y-%m-%d %H:%i";
		$tanggalbeli = mdate($format);

		$data = array(
			'id_pembeli' => $id_pembeli,
			'nama_tujuan'=> $nama,
			'hape_tujuan' => $hape,
			'alamat_tujuan' => $alamat,
			'kode_tujuan' => $kode,
			'tanggal_pembelian' => $tanggalbeli,
			'bukti_pembayaran' => "",
			'status_pembelian' => "Belum Ada Bukti",
			'total_pembayaran' => $total
		);

		$nextid = $this->Pembelian_model->insert($data);

		$item = $this->cart->contents($newest_first=false );

		foreach ($this->cart->contents() as $items){
			// echo $items['name'];
			$data = array(
				'id_pembelian' => $nextid,
				'id_produk' => $items['id'],
				'jumlah' => $items['qty'],
				'subtotal' => $items['subtotal']
			);

			$this->Pembelian_model->insert_detail($data);
		}

		$databank = $this->Bank_model->getById($bank);

		$datasukses = array(
			'kode' => $kode,
			'total' => $total,
			'databank' => $databank
		);

		$this->reset_keranjang();

		$this->load->view("home/sukses_pesan", $datasukses);
	}

	public function teshalaman(){
		$this->load->view("home/sukses_pesan");
	}
}
