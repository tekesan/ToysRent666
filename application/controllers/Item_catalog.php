<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item_catalog extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
	}

	public function index()
	{
		//print_r('WOY : '.$this->session->userdata['logged_in']['name']);
		$this->load->view('item-catalog');
	}
}
