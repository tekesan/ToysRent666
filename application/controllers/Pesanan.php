<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Pesanan_model');
		
	}
    //menampilkan pesanan
	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};
		$data['data_pesanan'] = $this->Pesanan_model->get_data_pesanan();
		$data['nama_barang'] = $this->Pesanan_model->get_barang_pesan();
		$this->load->view('pesanan',$data);
	}

	//delete pesanan
    public function delete($id){
	    $this->Pesanan_model->delete_pesanan(urldecode($id));
	    redirect('pesanan');
    }
}
