<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_item extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('item_model');
		
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};

		$this->load->view('input_item');
	}

	public function insert_item(){
		$nama = $this->input->post('nama');
		$deskripsi = $this->input->post('deskripsi');
		$usia_dari = $this->input->post('usia_dari');
		$usia_sampai = $this->input->post('usia_sampai');
		$bahan = $this->input->post('bahan');

		$data = array(
			'nama' => $nama,
			'deskripsi' => $deskripsi,
			'usia_dari' => $usia_dari,
			'usia_sampai' => $usia_sampai,
			'bahan' => $bahan
		);

		$this->item_model->insert_item($data);
		redirect('item');
	}
}
