<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->model('login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}
   
	public function auth()
	{
			$no_ktp		= $this->input->post('no_ktp',TRUE);
			$email		= $this->input->post('email',TRUE);
			$validate = $this->login_model->validate($no_ktp,$email);
			if($validate->num_rows() > 0){
				$data  = $validate->row_array();
				$name  = $data['nama_lengkap'];
				$alamat = $data['jalan'];
				$no_ktp = $data['no_ktp'];
                $email = $data['email'];
                $poin  = $data['poin'];
				$level = $data['level'];
				$sesdata = array(
					'name'  => $name,
					'no_ktp' => $no_ktp,
                    'alamat' => $alamat,
                    'email'     => $email,
					'poin'		=> $poin,
					'level'     => $level
				);
		
				$this->session->set_userdata('logged_in', $sesdata);
				$this->load->view('home');
			}else{
				echo $this->session->set_flashdata('msg','Login failed: KTP or email is Wrong');
				redirect('login');
    		}
	}

    public function logout()
	{
		$this->session->sess_destroy();
    redirect('home');
	}
}
