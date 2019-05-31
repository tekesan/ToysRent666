<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Item_model');
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};
		$data['item'] = $this->Item_model->get_all();
		$this->load->view('item',$data);
	}

	public function edit_form($nama){
		$data['item'] = $this->Item_model->get_item_by_id(urldecode($nama));

		$this->load->view('input_item',$data);
	}

	public function edit($id){
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

		$this->Item_model->update_item($data, urldecode($id));
		redirect('item');
	}

	public function delete($nama){
		$this->Item_model->delete_item(urldecode($nama));
		redirect('item');
	}
}