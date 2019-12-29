<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Usaha_model');
		$this->load->model('Produk_model');
		$this->load->model('Kategori_model');
		$this->load->model('SubKategori_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$this->usahaId =$session_data['profile_id'];
		}
		else{
			echo '<script>alert("Anda Belum Login")</script>';
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		if($this->Usaha_model->cek_usaha($this->session->userdata('profile_id'))){
			$this->buat_usaha_baru();
		}
		else{
			$this->dashboard();
		}
	}

	public function dashboard()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/dashboard',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function buat_usaha_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_baru',
			'content' => 'penjual/dashboard_baru',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function form_usaha_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_baru',
			'content' => 'penjual/buat_baru',
			'footer' => 'penjual/footer',
			'error' => ''
		];
		$this->load->view('penjual/template',$data);
	}

	public function buat_produk_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_produk_baru',
			'content' => 'penjual/dashboard_produk_baru',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function success_daftar()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_produk_baru',
			'content' => 'penjual/success_daftar',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function form_produk_baru()
	{
		$kategori = $this->Kategori_model->get_all();
		$data = [
			'notif' => $this->notif_about_akun(),
			'kategori' => $kategori,
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/buat_produk_baru',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function produk()
	{
		
		$para = $this->session->userdata('profile_id');
		$produk_data = $this->Produk_model->GetProduk($para);
		$data = [
			'notif' => $this->notif_about_akun(),
			'produk_data' => $produk_data,
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/list_produk',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function profil()
	{
		$para = array('usaha_profile_id' => $this->session->userdata('profile_id'));
		$usaha_data = $this->Usaha_model->getUser($para);
		$data = [
			'usaha_data' => $usaha_data,
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/profil',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function lihat_foto($id)
	{
		$para = array('list_produk_id' => $id);
		$foto_data = $this->Produk_model->get_foto_produk($para);
		$data = [
			'foto_data' => $foto_data,
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/foto_produk',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function pilih_foto($id)
	{
		$foto = $this->input->post('foto_depan');
		$data = array('produk_foto_depan' => $foto);
		$this->Produk_model->update($id, $data);
		$this->produk();
	}


	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

	public function cek_usaha($id)
	{
		if($this->Usaha_model->cek_usaha($id)){
			return "Belum Ada";
		}
		else{
			return "Sudah Ada";
		}
	}

	public 	function tes()
	{
		$this->load->view('penjual/dashboard');
	}

	public function get_subkategori(){
		$id=$this->input->post('id');
		$data=$this->SubKategori_model->get_where($id);
		echo json_encode($data);
	}

	public function create_penjual()
	{
		$next = $this->Usaha_model->get_next_id();
		$usaha_id = $next->AUTO_INCREMENT;
		
		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$usahaId =$session_data['profile_id'];
		}

		$this->load->library('form_validation');
		$this->load->model('Usaha_model');
		$this->form_validation->set_rules('usaha_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_alamat','Alamat Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_no_telp','No. Telp','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_foto','Foto Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profil','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profile_id','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->load->helper('url','form');
		// $data['create_penjual']= $this->Admin_Model->getcreate_penjual($id);

        if($this->form_validation->run()==FALSE)
        {
            $this->form_usaha_baru();
        }
        else
        {
          $config['upload_path'] = './assets/foto/foto_usaha';
          $config['allowed_types'] = 'jpg|png';
          $config['file_name'] = $usaha_id;
          $this->load->library('upload', $config, 'fotoupload');
          $this->fotoupload->initialize($config);
           // unlink(FCPATH."./assets/img/".$hasil[0]);

            if (!$this->fotoupload->do_upload('usaha_foto'))
              {
              		$error = array('error' => $this->upload->display_errors());

                     $this->load->view('Penjual/tes', $error);
              }
            else
              {
				  $namafile = $this->fotoupload->data('file_name');
				  $session_data=$this->session->userdata('logged_in');
				  // var_dump($namafile);

				  $data = array(
				  	'usaha_nama' => $this->input->post('usaha_nama'),
				  	'usaha_alamat' => $this->input->post('usaha_alamat'),
				  	'usaha_no_telp' => $this->input->post('usaha_no_telp'),
				  	'usaha_email' => $this->input->post('usaha_email'),
				  	'usaha_foto' => $namafile,
				  	'usaha_keterangan' => $this->input->post('usaha_keterangan'),
				  	'usaha_profile_id' => $this->session->userdata('profile_id'),
				  );

				  $this->Usaha_model->insert($data);
				  $this->success_daftar();
              }
        }
	}

	public function update_usaha($id)
	{
		$this->load->library('form_validation');
		$this->load->model('Usaha_model');
		$this->form_validation->set_rules('usaha_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_alamat','Alamat Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_no_telp','No. Telp','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_foto','Foto Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profil','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profile_id','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->load->helper('url','form');
		// $data['create_penjual']= $this->Admin_Model->getcreate_penjual($id);

        if($this->form_validation->run()==FALSE)
        {
        	$para = array('usaha_id' => $id);
			$usaha_data = $this->Usaha_model->getUser($para);
			$data = [
				'usaha_data' => $usaha_data,
				'notif' => $this->notif_about_akun(),
				'sidebar' => 'penjual/sidebar',
				'content' => 'penjual/update_profil',
				'footer' => 'penjual/footer',
			];
			$this->load->view('penjual/template',$data);
        }
        else
        {

           if (!empty($_FILES['usaha_foto']['name']))
			{
				$para = array('usaha_profile_id' => $this->session->userdata('profile_id'));
				$usaha_data = $this->Usaha_model->getUser($para);

		    	  $config['upload_path'] = './assets/foto/foto_usaha';
		          $config['allowed_types'] = 'jpg|png';
		          $config['file_name'] = $usaha_data[0]->usaha_id;
		          $this->load->library('upload', $config, 'fotoupload');
		          $this->fotoupload->initialize($config);
		    	  unlink(FCPATH."assets/foto/foto_usaha/".$usaha_data[0]->usaha_foto);
				  $this->fotoupload->do_upload('usaha_foto');
				  $namafile = $this->fotoupload->data('file_name');

				  $data = array(
					'usaha_nama' => $this->input->post('usaha_nama'),
					'usaha_alamat' => $this->input->post('usaha_alamat'),
					'usaha_no_telp' => $this->input->post('usaha_no_telp'),
					'usaha_email' => $this->input->post('usaha_email'),
					'usaha_foto' => $namafile,
					'usaha_keterangan' => $this->input->post('usaha_keterangan'),
					'usaha_profile_id' => $this->session->userdata('profile_id'),
				);
			}
			else{
				$data = array(
					'usaha_nama' => $this->input->post('usaha_nama'),
					'usaha_alamat' => $this->input->post('usaha_alamat'),
					'usaha_no_telp' => $this->input->post('usaha_no_telp'),
					'usaha_email' => $this->input->post('usaha_email'),
					'usaha_keterangan' => $this->input->post('usaha_keterangan'),
					'usaha_profile_id' => $this->session->userdata('profile_id'),
				);
			}
				 
				  $this->Usaha_model->update($id, $data);
				  $this->session->set_flashdata('flash_message', 'Update Profil Berhasil');
				  $this->profil();
		}
    }

	public function tambahkan_produk()
	{
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('produk_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('produk_harga','Alamat Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('produk_stock','No. Telp','required',array('required' => '%s tidak boleh kosong.'));

        if($this->form_validation->run()==FALSE)
        {
			$this->form_produk_baru();
        }
        else
        {
        	$next = $this->Produk_model->get_next_id();
			$produk_id = $next->AUTO_INCREMENT;
			$list_namafile = array();


		    $files = $_FILES;
		    $filesCount = count($_FILES['userfile']['name']);
		    for($i=0; $i< $filesCount; $i++)
		    {           
		    	 $config = array();
		         $config['upload_path'] = './assets/foto/foto_produk';
		         $config['allowed_types'] = 'jpg|png';
		         $config['file_name'] = $produk_id."_".($i+1);

		        $_FILES['userfile']['name']= $files['userfile']['name'][$i];
		        $_FILES['userfile']['type']= $files['userfile']['type'][$i];
		        $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
		        $_FILES['userfile']['error']= $files['userfile']['error'][$i];
		        $_FILES['userfile']['size']= $files['userfile']['size'][$i];

		         $this->load->library('upload', $config, 'fotoupload');
          		 $this->fotoupload->initialize($config);

          		  $this->fotoupload->do_upload();
				  $namafile = $this->fotoupload->data('file_name');
				  array_push($list_namafile, $namafile);


		        // $this->upload->initialize($config);
		        // $this->upload->do_upload();

		        $this->Produk_model->list_gambar($produk_id,$namafile);
		    }
		    	 $para = array('usaha_profile_id' =>  $this->session->userdata('profile_id'));
		    	 $idusaha = $this->Usaha_model->GetUser($para); 

		    	 $data = array(
				  	'produk_nama' => $this->input->post('produk_nama'),
				  	'produk_subkategori_id' => $this->input->post('subkategori'),
				  	'produk_harga' => $this->input->post('produk_harga'),
				  	'produk_stock' => $this->input->post('produk_stock'),
				  	'produk_deskripsi' => $this->input->post('deskripsi'),
				  	'produk_foto_depan' => $list_namafile[0],
					  'produk_status' => "Menunggu",
					  'produk_terjual' => 0,
				  	'produk_usaha_id' => $idusaha[0]->usaha_id
				  );

				  $this->Produk_model->insert($data);

				  
			$notifakun = $this->Produk_model->get_data_belum_disetujui();

			//pusher untuk admin
			require "vendor/autoload.php";
	
			$options = array(
				'cluster' => 'ap1',
				'useTLS' => true
			);
			$pusher = new Pusher\Pusher(
				'07266be1b2356948225a',
				'18436d630779a7ec8b65',
				'887894',
				$options
			);

			$data['produk_butuh_persetujuan'] = strval($notifakun);
			$pusher->trigger('my-channel', 'new_produk', $data);
			$this->produk();

           }    
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
}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */
