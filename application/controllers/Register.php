<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct()
  {
	parent::__construct();
	$this->load->model('Register_model');
  }

	public function index()
	{
		$this->load->view('register');
	}

	public function register_anggota()
	{
		$no_ktp = $this->input->post('no_ktp');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$validate = $this->Register_model->validate_anggota($no_ktp,$email);
		if($validate->num_rows() > 0){
			echo $this->session->set_flashdata('msg','Register failed: KTP or email already exist');
			redirect('register');
		}else{
			$no_ktp = $this->input->post('no_ktp');
			$nama_lengkap = $this->input->post('nama_lengkap');
			$email = $this->input->post('email');
			$tanggal_lahir = $this->input->post('tanggal_lahir');
			$no_telp = $this->input->post('no_telp');
			$alamat = $this->input->post('alamat');
			$data = array(
			'no_ktp' => $no_ktp,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'tanggal_lahir' => $tanggal_lahir,
			'no_telp' => $no_telp
		);

		$data_alamat = explode(', ', $alamat);

		$this->Register_model->register_anggota($data, $data_alamat);
		redirect('login');
		}
	}

	public function register_admin()
	{
		$no_ktp = $this->input->post('no_ktp');
		$email = $this->input->post('email');
		$validate = $this->Register_model->validate_admin($no_ktp,$email);
		if($validate->num_rows() > 0){
			echo $this->session->set_flashdata('msg','Register failed: KTP or email already exist');
			redirect('register');
		}else{
		$no_ktp = $this->input->post('no_ktp');
		$nama_lengkap = $this->input->post('nama_lengkap');
		$email = $this->input->post('email');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$no_telp = $this->input->post('no_telp');
		$data = array(
			'no_ktp' => $no_ktp,
			'nama_lengkap' => $nama_lengkap,
			'email' => $email,
			'tanggal_lahir' => $tanggal_lahir,
			'no_telp' => $no_telp
		);

		$this->Register_model->register_admin($data);
		redirect('admin-login');
		}
	}
}
