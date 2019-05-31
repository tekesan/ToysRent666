<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
            $this->load->library('session');
            $this->load->model('Level_model');
    }

    public function index()
	{
        if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};
	    $data['lvl'] = $this->Level_model->getLevel();
		$this->load->view('level', $data);
	}

	public function edit_form($nama){
        $data['lvl'] = $this->Level_model->get_level_by_nama(urldecode($nama));
        $this->load->view('form_level',$data);
    }

	//kontrol delete level
	public function delete_level($poin)
    {
        $this->Level_model->deleteLevel($poin);
        redirect('level');
    }

    public function edit_level($idnama)
    {
        $nama = $this->input->post('nama_level');
        $poin = $this->input->post('minimum_poin');
        $deskripsi = $this->input->post('deskripsi');

        $data = array(
            'nama_level' => $nama,
            'minimum_poin' => $poin,
            'deskripsi' => $deskripsi
        );

        $this->Level_model->update_level($data, urldecode($idnama));
        redirect('level');
    }
}
