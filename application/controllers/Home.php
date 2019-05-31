<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		//print_r('WOY : '.$this->session->userdata['logged_in']['name']);
		$this->load->view('home');
	}
}
