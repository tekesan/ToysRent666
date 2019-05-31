<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengiriman extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};

		$this->load->view('pengiriman');

	}
}
