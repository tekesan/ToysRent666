<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chat extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Chat_model');
	}

	public function admin()
	{
		$no_ktp = $this->session->userdata['logged_in_admin']['no_ktp'];
		$data['query'] = $this->Chat_model->get_nama_anggota($no_ktp);
		$this->load->view('chat-admin',$data);
	}

	public function anggota()
	{
		$no_ktp = $this->session->userdata['logged_in']['no_ktp'];
		$data['query'] = $this->Chat_model->get_nama_admin($no_ktp);
		$this->load->view('chat-anggota',$data);
	}

	
	public function _rules() 
    {
		$this->form_validation->set_rules('pesan', 'pesan', 'trim|required');

		$this->form_validation->set_rules('pesan', 'pesan', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

	public function admin_conv($no_ktp_anggota)
	{
		$no_ktp = $this->session->userdata['logged_in_admin']['no_ktp'];
		$data = array(
			'action' => site_url('chat/create_action/'.$no_ktp_anggota),
			'query'=> $this->Chat_model->get_nama_anggota($no_ktp),
			'query1'=> $this->Chat_model->get_conv_anggota($no_ktp_anggota, $no_ktp),
			'query2'=> $this->Chat_model->get_conv_admin($no_ktp_anggota, $no_ktp), 
			'pesan' => set_value('pesan'),
		);

		$this->load->view('chat-admin-conv',$data);
		
	}

	public function create_action($no_ktp_anggota) 
    {
		$no_ktp_admin = $this->session->userdata['logged_in_admin']['no_ktp'];
		$this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create_data();
        } else {
            $data = array(
				'pesan' => $this->input->post('pesan',TRUE),
				'no_ktp_anggota' => $no_ktp_anggota,
				'no_ktp_admin' => $no_ktp_admin,
			);
			
			$this->Chat_model->insert_chat($data);
			redirect(site_url("chat/admin_conv/".$data[no_ktp_anggota]));
        }
	}

	public function anggota_conv($no_ktp_admin)
	{
		$no_ktp_anggota = $this->session->userdata['logged_in']['no_ktp'];
		$data = array(
			'action' => site_url('chat/create_action1/'.$no_ktp_admin),
			'query'=> $this->Chat_model->get_nama_admin($no_ktp_anggota),
			'query1'=> $this->Chat_model->get_conv_admin1($no_ktp_anggota, $no_ktp_admin),
			'query2'=> $this->Chat_model->get_conv_anggota1($no_ktp_anggota, $no_ktp_admin), 
			'pesan' => set_value('pesan'),
		);

		$this->load->view('chat-anggota-conv',$data);
		
	}

	public function create_action1($no_ktp_admin) 
    {
		$no_ktp_anggota = $this->session->userdata['logged_in']['no_ktp'];
		$this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create_data();
        } else {
            $data = array(
				'pesan' => $this->input->post('pesan',TRUE),
				'no_ktp_anggota' => $no_ktp_anggota,
				'no_ktp_admin' => $no_ktp_admin,
			);
			
			$this->Chat_model->insert_chat1($data);
			redirect(site_url("chat/anggota_conv/".$data[no_ktp_admin]));
        }
	}

}
