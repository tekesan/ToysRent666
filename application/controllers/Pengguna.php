<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengguna extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('Pengguna_model');
		
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};

		$data['pengguna'] = $this->Pengguna_model->get_pengguna();

		$this->load->view('pengguna',$data);
	}
}
