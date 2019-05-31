<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_admin extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login-admin');
	}

	public function auth_admin()
	{
			$no_ktp		= $this->input->post('no_ktp',TRUE);
			$email		= $this->input->post('email',TRUE);
			$validate = $this->login_model->validate_admin($no_ktp,$email);
			if($validate->num_rows() > 0){
				$data  = $validate->row_array();
				$no_ktp = $data['no_ktp'];
				$name  = $data['nama_lengkap'];
				$email = $data['email'];
				$sesdata = array(
					'no_ktp' => $no_ktp,
					'name'  => $name,
					'email'     => $email
				);
		
				$this->session->set_userdata('logged_in_admin', $sesdata);
				redirect('dashboard');
			}else{
				echo $this->session->set_flashdata('msg','Login failed: KTP or email is Wrong');
				redirect('admin-login');
    		}
	}

    public function logout()
	{
		$this->session->sess_destroy();
    redirect('admin-login');
	}
}