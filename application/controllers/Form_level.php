<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_level extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('Level_model');
    }

    public function index(){
        if (!(isset($this->session->userdata['logged_in_admin']))) {
            redirect('admin-login');
        };
        $this->load->view('form_level');
    }

    public function insert_level(){
        $nama = $this->input->post('nama_level');
        $poin = $this->input->post('minimum_poin');
        $deskripsi = $this->input->post('deskripsi');

        $value = array(
            'nama_level' => $nama,
            'minimum_poin' => $poin,
            'deskripsi' => $deskripsi
        );

        $this->Level_model->insertLevel($value);
        redirect('level');
    }
}