<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		if(!$this->auth_model->current_user()){
			redirect('auth/login');
		}
	}

	public function index()
	{

		$this->load->model('Def_models');
		$data['users'] = $this->Def_models->get_data();
		$data['title'] = 'Beranda';

		$this->load->view('template/header.php', $data);
		$this->load->view('home.php', $data);
		$this->load->view('template/footer.php');
	}

	public function hasil() 
	{
		$kode_mtk 	= $this->input->post('kode_mtk');
		$nama_mtk 	= $this->input->post('nama_mtk');
		$sks 		= $this->input->post('sks');
		
		$data['title'] = 'Hasil Submit';
		$data['kode_mtk'] = $kode_mtk;
		$data['nama_mtk'] = $nama_mtk;
		$data['sks'] = $sks;
	
		$this->load->view('template/header.php', $data);
		$this->load->view('hasil.php', $data);
		$this->load->view('template/footer.php');
	}
}
