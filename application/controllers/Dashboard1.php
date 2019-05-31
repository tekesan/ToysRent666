<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard1 extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Dashboard_model');
		
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};

		$data['pesanan'] = $this->Dashboard_model->get_jumlah_pesanan();
		$data['item'] = $this->Dashboard_model->get_jumlah_item();
		$data['pengguna'] = $this->Dashboard_model->get_jumlah_pengguna();
		$data['pengiriman'] = $this->Dashboard_model->get_jumlah_pengiriman();
		
		$this->load->view('dashboard1',$data);
	}
}
