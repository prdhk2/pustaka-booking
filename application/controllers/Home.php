<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Def_models'); // Pastikan model sudah dimuat di sini
    }

	public function index()
	{

		$this->load->model('Def_models');
		$data['users'] = $this->Def_models->get_data();
		$data['mtk'] = $this->Def_models->detail_mtk();

		$data['title'] = 'Beranda';

		$this->load->view('template/header.php', $data);
		$this->load->view('template/sidebar.php', $data);
		$this->load->view('dashboard.php', $data);
		$this->load->view('template/footer.php');
	}

	public function mtk() {

		$this->load->model('Def_models');
		$data['users'] = $this->Def_models->get_data();
		$data['mtk'] = $this->Def_models->detail_mtk();

		$data['title'] = 'Mata Kuliah';

		$this->load->view('template/header.php', $data);
		$this->load->view('template/sidebar.php');
		$this->load->view('tabel_mata_kuliah.php');
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

		$this->load->model('Def_models');
		$data['users'] = $this->Def_models->get_data();
	
		$this->load->view('template/header.php', $data);
		$this->load->view('template/sidebar.php');
		$this->load->view('hasil.php');
		$this->load->view('template/footer.php');
	}

	public function hapus($id) {
		$this->db->delete('mata_kuliah', array('id' => $id));
	}
	

	public function update() {
		// get data post
		$id = $this->input->post('id');
		$kode_mtk = $this->input->post('kode_mtk');
		$nama_mtk = $this->input->post('nama_mtk');
		$sks = $this->input->post('sks');
		$dosen = $this->input->post('dosen');
		$kelas = $this->input->post('kelas');
		$jadwal = $this->input->post('jadwal');
	
		$data = array(
			'kode_mtk' => $kode_mtk,
			'nama_mtk' => $nama_mtk,
			'sks' => $sks,
			'dosen' => $dosen,
			'kelas' => $kelas,
			'jadwal' => $jadwal
		);
	
		$where = array(
			'id' => $id
		);
		
		$this->Def_models->updateMtk('mata_kuliah', $where, $data);
		redirect('Home/mtk');
	}
}