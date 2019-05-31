<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Profile_model');
	}

	public function index($no_ktp)
	{
		$data['profile'] = $this->Profile_model->get_profile($no_ktp);
		$this->load->view('profile',$data);
	}
}
