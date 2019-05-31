<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Delivery extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('delivery_model');
    }



	public function index()
	{

        $this->data['all_barang'] = $this->delivery_model->getDaptar();

		$this->load->view('delivery-list', $this->data);

	}

	public function create()
	{

        // if(empty($this->session->userdata('logged_in'))){

        //     redirect();

        // }

		$this->data['user'] = $this->session->userdata('logged_in')['no_ktp'];
        $this->data['alamat'] = $this->session->userdata('logged_in')['alamat'];

		//print_r("PRINT".$this->session->userdata('logged_in')['no_ktp']);

		$this->data['all_barang'] = $this->delivery_model->getBarang($this->data['user']);

		$this->load->view('create_delivery', $this->data);

	}

    public function edit($id)
    {

        // if(empty($this->session->userdata('logged_in'))){

        //     redirect();

        // }

        $this->data['ktp'] = $this->session->userdata('logged_in')['no_ktp'];
        $this->data['alamat'] = $this->session->userdata('logged_in')['alamat'];

        //print_r("PRINT".$this->session->userdata('logged_in')['no_ktp']);

        $this->data['all_barang'] = $this->delivery_model->getDataDeliv($id,$this->data['ktp']);

        $this->load->view('edit_delivery', $this->data);

    }



    public function sell()
    {
        //$brg =	$this->input->post('barang');
        $brg = explode('|', $this->input->post('barang'))[0];



        $id_pemesanan = explode('|', $this->input->post('barang'))[1];

        $alamat =	$_POST['alamat'];
        $tgl =	$_POST['tanggal'];
        $metode =	$_POST['metode'];
        $no_ktp = $this->session->userdata('logged_in')['no_ktp'];
        $nama = $this->session->userdata('logged_in')['name'];


        $this->delivery_model->insertDeliv($id_pemesanan, $brg, $metode, $tgl, $no_ktp, $nama);

        $deliv_insert = '<h3 class="success" align="center"><font color="green">Insert Delivery Success</font></h3><br><br>';

        $this->session->set_flashdata('deliv_insert',$deliv_insert);

        redirect('delivery');
    }

    public function review()
    {
        //$brg =    $this->input->post('barang');
       

        $review =   $_POST['review'];
      	$tgl_review = $_POST['no_resi'];

        $no_ktp = $this->session->userdata('logged_in')['no_ktp'];
        $nama = $this->session->userdata('logged_in')['name'];


        $this->delivery_model->updateReview($review, $tgl_review);

        $deliv_insert = '<h3 class="success" align="center"><font color="green">Insert Delivery Success</font></h3><br><br>';

        $this->session->set_flashdata('deliv_insert',$deliv_insert);

        redirect('delivery');
    }

    public function update()
    {
        //$brg =	$this->input->post('barang');
        $brg = explode('|', $this->input->post('barang'))[0];



        $id_pemesanan = explode('|', $this->input->post('barang'))[1];

        $alamat =	$_POST['alamat'];
        $tgl =	$_POST['tanggal'];
        $metode =	$_POST['metode'];
        $no_resi = $_POST['no_resi'];
        $no_ktp = $this->session->userdata('logged_in')['no_ktp'];
        $nama = $this->session->userdata('logged_in')['name'];


        $this->delivery_model->updateDeliv($no_resi,$id_pemesanan, $metode, $tgl, $no_ktp, $nama);

        $deliv_update = '<h3 class="success" align="center"><font color="green">Update Delivery Success</font></h3><br><br>';

        $this->session->set_flashdata('deliv_update',$deliv_update);

        redirect('delivery');
    }

    public function delete($id)
    {
        //$brg =	$this->input->post('barang');
        $this->delivery_model->snapfingerthanosDelivery($id);

        $this->load->view('edit_delivery', $this->data);

        $deliv_delete = '<h3 class="success" align="center"><font color="green">Delete Delivery Success</font></h3><br><br>';

        $this->session->set_flashdata('deliv_delete',$deliv_delete);

        redirect('delivery');
    }
}
