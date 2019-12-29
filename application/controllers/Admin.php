<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
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

	public function index()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/dashboard',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}


	public function akun($tipe_user)
	{
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		
		$data = [
			'notif' => $this->notif_about_akun(),
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/akun',
			'footer' => 'admin/footer',
		];
		$this->load->view('admin/template',$data);
		// var_dump($data);
	}

	public function kategori()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$data = [
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/kategori',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}

	public function get_info()
	{
		 $id = $this->input->post('id');
		 $data = $this->Profile_model->profile_and_login(null,$id);
		 echo json_encode($data);
	}

	public function ganti_status()
	{
		 $id = $this->input->post('id');
		 $data = $this->Profile_model->verifikasi($id);
		 echo json_encode("Verifikasi berhasil dilakukan.");
	}

	public function ganti_status_produk()
	{
		 $id = $this->input->post('id');
		 $data = $this->Produk_model->verifikasi($id);
		 echo json_encode("Verifikasi berhasil dilakukan.");
	}

	public function checkemail()
	{
		$email = $this->input->post('email');
		$ketersediaan = $this->Login_model->checkemail($email );
		if($ketersediaan == true){
			echo json_encode($status = 'E-mail belum dipakai.');
		}
		else{
			echo json_encode($status = 'E-mail sudah dipakai.');
		}
		// echo "<pre>";
		// echo var_dump($ketersediaan);
		// echo "</pre>";
	}

	public function buat_akun()
	{
		 $next = $this->Profile_model->get_next_id();
		 $id = $next->AUTO_INCREMENT;
		 $nama = $this->input->post('nama');
		 $hape = $this->input->post('hape');
		 $alamat = $this->input->post('alamat');
		 $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $status = $this->input->post('status');
		 $level = $this->input->post('level');
		 $this->Profile_model->buat_profile($id, $nama, $hape, $alamat, $email, $password, $status, $level);
		 echo json_encode('Data berhasil ditambahkan.');
	}

	public function update_akun()
	{
		 $id = $this->input->post('id');
		 $nama = $this->input->post('nama');
		 $hape = $this->input->post('hape');
		 $alamat = $this->input->post('alamat');
		 $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $this->Profile_model->update_profile($id, $nama, $hape, $alamat, $email, $password);
		 echo json_encode('Data berhasil diupdate.');
	}

	public function hapus_akun()
	{
		 $id = $this->input->post('id');
		 $this->Profile_model->hapus_profile($id);
		 echo json_encode('Data berhasil dihapus.');
	}

	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notifproduk = $this->Produk_model->get_data_belum_disetujui();
		return(array($notifakun, $notifproduk));
	}

	public function proses_kategori()
	{
		 $id = $this->input->post('id');
		 $nama = $this->input->post('nama');
		 $tipe = $this->input->post('tipe');

		 if($tipe == "baru"){
		 	$data = array(
		 		'kategori_nama' => $nama
		 	);
		 	if($this->Kategori_model->insert($data)){
		 		$hasil = "Tambah Kategori Berhasil";
		 	}
		 	else{
		 		$hasil = "Tambah Kategori Gagal";
		 	}
		 }
		 else if($tipe == "hapus"){
		 	$data = array(
		 		'kategori_id' => $id
		 	);
		 	if($this->Kategori_model->delete($data)){
		 		$hasil = "Hapus Kategori Berhasil";
		 	}
		 	else{
		 		$hasil = "Hapus Kategori Gagal";
		 	}
		 }
		 else if($tipe == "update"){
		 	$data = array(
		 		'kategori_nama' => $nama
		 	);
		 	if($this->Kategori_model->update($data,$id)){
		 		$hasil = "Update Kategori Berhasil";
		 	}
		 	else{
		 		$hasil = "Update Kategori Gagal";
		 	}
		 }

		 echo json_encode($hasil);
	}

	public function proses_subkategori()
	{
		 $id = $this->input->post('id');
		 $idkategori = $this->input->post("idkategori");
		 $nama = $this->input->post('nama');
		 $tipe = $this->input->post('tipe');

		 if($tipe == "baru"){
		 	$data = array(
		 		'subkategori_nama' => $nama,
		 		'subkategori_kategori_id' => $idkategori
		 	);
		 	if($this->SubKategori_model->insert($data)){
		 		$hasil = "Tambah Sub-Kategori Berhasil";
		 	}
		 	else{
		 		$hasil = "Tambah Sub-Kategori Gagal";
		 	}
		 }
		 else if($tipe == "ambil"){
		 	$hasil = $this->SubKategori_model->get_where($idkategori);
		 }
		 else if($tipe == "hapus"){
		 	$data = array(
		 		'subkategori_id' => $id
		 	);
		 	if($this->SubKategori_model->delete($data)){
		 		$hasil = "Hapus Berhasil";
		 	}
		 	else{
		 		$hasil = "Hapus Gagal";
		 	}
		 }
		 else if($tipe == "update"){
		 	$data = array(
		 		'subkategori_nama' => $nama
		 	);
		 	if($this->SubKategori_model->update($data,$id)){
		 		$hasil = "Update Berhasil";
		 	}
		 	else{
		 		$hasil = "Update Gagal";
		 	}
		 }

		 echo json_encode($hasil);
	}

	public function proses_usaha()
	{
		 $id = $this->input->post('id');
		 $tipe = $this->input->post('tipe');
		 $nama = $this->input->post('nama');
		 $alamat = $this->input->post('alamat');
		 $hape = $this->input->post('hape');
		 $email = $this->input->post('email');

		 if($tipe == "baru"){
		 	$data = array(
		 		'subkategori_nama' => $nama,
		 		'subkategori_kategori_id' => $idkategori
		 	);
		 	if($this->SubKategori_model->insert($data)){
		 		$hasil = "Tambah Sub-Kategori Berhasil";
		 	}
		 	else{
		 		$hasil = "Tambah Sub-Kategori Gagal";
		 	}
		 }
		 else if($tipe == "ambil"){
		 	$hasil = $this->Usaha_model->getById($id);
		 }
		 else if($tipe == "hapus"){
		 	
		 	if($this->Usaha_model->hapus_ajax($id)){
		 		$hasil = "Hapus Berhasil";
		 	}
		 	else{
		 		$hasil = "Hapus Gagal";
		 	}
		 }
		 else if($tipe == "update"){
		 	$data = array(
				 'usaha_nama' => $nama,
				 'usaha_alamat' => $alamat,
				 'usaha_email' => $email,
				 'usaha_no_telp' => $hape
		 	);
		 	if($this->Usaha_model->update_ajax($id,$data)){
		 		$hasil = "Update Berhasil";
		 	}
		 	else{
		 		$hasil = "Update Gagal";
		 	}
		 }

		 echo json_encode($hasil);
	}

	public function produk()
	{
		$produk_data = $this->Produk_model->GetProdukForAdmin();
		$data = [
			'notif' => $this->notif_about_akun(),
			'produk_data' => $produk_data,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/list_produk',
			'footer' => 'admin/footer',
		];
		$this->load->view('admin/template',$data);
	}

	public function proses_produk(){
		$id = $this->input->post('id');
		$tipe = $this->input->post('tipe');
		$nama = $this->input->post('nama');
		$harga = $this->input->post('harga');
		$stok = $this->input->post('stok');

		if($tipe == "ambil"){
			$hasil = $this->Produk_model->get_data_ajax($id);
		}
		else if($tipe == "update"){
			$data = array(
				'produk_nama' => $nama,
				'produk_harga' => $harga,
				'produk_stock' => $stok,
			);
			if($this->Produk_model->update_ajax($id,$data)){
				$hasil = "Update Berhasil";
			}
			else{
				$hasil = "Update Gagal";
			}
		}
		else if($tipe == "hapus"){
		 	
			if($this->Produk_model->hapus_ajax($id)){
				$hasil = "Hapus Berhasil";
			}
			else{
				$hasil = "Hapus Gagal";
			}
		}

		echo json_encode($hasil);
	}

	public function list_ukm(){
		$list_ukm = $this->Usaha_model->get_usaha_pemilik();
		$data = [
			'notif' => $this->notif_about_akun(),
			'list_ukm' => $list_ukm,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/list_ukm',
			'footer' => 'admin/footer',
		];
		$this->load->view('admin/template',$data);
		
	}

	public function bank(){
		$list_bank = $this->Bank_model->get_all();
		$data = [
			'notif' => $this->notif_about_akun(),
			'list_bank' => $list_bank,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/list_bank',
			'footer' => 'admin/footer',
		];
		$this->load->view('admin/template',$data);
	}

	public function proses_bank()
	{
		 $id = $this->input->post('id');
		 $tipe = $this->input->post('tipe');
		 $nama = $this->input->post('nama');
		 $norekening = $this->input->post('norekening');
		 $atasnama = $this->input->post('atasnama');

		 if($tipe == "baru"){
			$data = array(
				'bank_nama' => $nama,
				'no_rekening' => $norekening,
				'atas_nama' => $atasnama,
			);
		 	if($this->Bank_model->insert($data)){
		 		$hasil = "Tambah Rekening Berhasil";
		 	}
		 	else{
		 		$hasil = "Tambah Rekening Gagal";
		 	}
		 }
		 else if($tipe == "ambil"){
		 	$hasil = $this->Bank_model->getById($id);
		 }
		 else if($tipe == "hapus"){
		 	
		 	if($this->Bank_model->hapus_ajax($id)){
		 		$hasil = "Hapus Berhasil";
		 	}
		 	else{
		 		$hasil = "Hapus Gagal";
		 	}
		 }
		 else if($tipe == "update"){
		 	$data = array(
				 'bank_nama' => $nama,
				 'no_rekening' => $norekening,
				 'atas_nama' => $atasnama,
		 	);
		 	if($this->Bank_model->update_ajax($id,$data)){
		 		$hasil = "Update Berhasil";
		 	}
		 	else{
		 		$hasil = "Update Gagal";
		 	}
		 }

		 echo json_encode($hasil);
	}

	public function beli(){
		$list_beli = $this->Pembelian_model->getforadmin();
		$data = [
			'notif' => $this->notif_about_akun(),
			'list_beli' => $list_beli,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/list_beli',
			'footer' => 'admin/footer',
		];
		$this->load->view('admin/template',$data);
	}

	public function proses_beli()
	{
		 $id = $this->input->post('id');
		 $tipe = $this->input->post('tipe');
		 $status = $this->input->post('status');

		 if($tipe == "profil"){
		 	$hasil = $this->Profile_model->getforadmin($id);
		 }
		 else if($tipe == "status"){
			$hasil = $this->Pembelian_model->getbyid($id);
		}
		else if($tipe == "gantistatus"){
			$data = array(
				'status_pembelian' => $status
			);
			if($this->Pembelian_model->gantistatus($id, $data)){
				$hasil = "Berhasil Update Status";
			}
			else{
				$hasil = "Gagal Update Status";
			}
		}
		else if($tipe == "tujuan"){
			$hasil = $this->Pembelian_model->getbyid($id);
		}

		 echo json_encode($hasil);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */