<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
	}
	

	public function index()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();

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

		$data['akun_butuh_verifikasi'] = '1';
		$pusher->trigger('my-channel', 'new_penjual', $data);
	}

	public function tes_p()
	{
		$this->load->view('tes_pusher');
		
	}

	public function teslagi()
	{
		// $notifakun = $this->Produk_model->get_data_belum_disetujui();

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

			$data['produk_butuh_persetujuan'] = "3";
			$pusher->trigger('my-channel', 'new_produk', $data);
	}

	public function waktu()
	{
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d h:i:s', time());
		var_dump($date);
	}

}

/* End of file tes.php */
/* Location: ./application/controllers/tes.php */