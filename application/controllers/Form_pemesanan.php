<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_pemesanan extends CI_Controller{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Pesanan_model');

    }

    public function index()
    {
        if (!(isset($this->session->userdata['logged_in_admin']))) {
            redirect('admin-login');
        };
        $data['nama_anggota'] = $this->Pesanan_model->get_nama_anggota();
        $data['nama_barang'] = $this->Pesanan_model->get_nama_barang();
        $this->load->view('form_pemesanan',$data);
    }
}