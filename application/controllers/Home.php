<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
	
		if($this->session->userdata('status') != "login"){
			redirect(base_url("auth"));
		}
	}

	public function index()
	{
		$this->load->model('Dokter_m', 'Obat_m', 'Pasien_m', 'Rs_Rujuk_m', 'Berobat_m');
		$data['dokter'] = $this->Dokter_m->count();
		$data['obat'] = $this->Obat_m->count();
		$data['pasien'] = $this->Pasien_m->index();
		$data['rs_rujuk'] = $this->Rs_Rujuk_m->count();
		$data['berobat'] = $this->Berobat_m->count();

		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('template/footer');
	}
}
