<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->model('Barang_model');
		$this->load->model('Item_model');
		$this->load->model('Anggota_model');
		$this->load->model('Level_model');
		$this->load->model('Info_barang_level_model');
	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in_admin']))) {
			redirect('admin-login');
		};
		$data['query'] = $this->Barang_model->get_all();
		$this->load->view('barang',$data);
	}

	public function detail($id_barang)
	{
		$data['query'] = $this->Barang_model->get_detail_id($id_barang);
		$data['query1']=$this->Info_barang_level_model->get_detail_by_id($id_barang);
		$this->load->view('detail_barang',$data);
	}

	public function _rules() 
    {
		$this->form_validation->set_rules('id_barang', 'id_barang', 'trim|required');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required');
		$this->form_validation->set_rules('kondisi', 'kondisi', 'trim|required');
		$this->form_validation->set_rules('nama_level', 'nama_level', 'trim|required');
		$this->form_validation->set_rules('porsi_royalti', 'porsi_royalti', 'trim|required');
		$this->form_validation->set_rules('harga_sewa', 'harga_sewa', 'trim|required');

		$this->form_validation->set_rules('id_barang', 'id_barang', 'trim');
		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
	
	public function create_data()
	{
		$data = array(
            'action' => site_url('barang/create_action'),
			'id_barang' => set_value('id_barang'),
			'nama' => $this->Item_model->get_nitem(),
			'warna' => set_value('warna'),
			'url_foto' => set_value('url_foto'),
			'kondisi' => set_value('kondisi'),
			'lama_penggunaan' => set_value('lama_penggunaan'),
			'no_ktp' => $this->Anggota_model->get_no_ktp(),
			'nama_level' => $this->Level_model->getNama(),
			'porsi_royalti' => set_value('porsi_royalti'),
			'harga_sewa' => set_value('harga_sewa'),
			);
        $this->load->view('input_barang', $data);
	}
	
	public function create_action() 
    {
		$this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create_data();
        } else {
            $data = array(
				'id_barang' => $this->input->post('id_barang',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'warna' => $this->input->post('warna',TRUE),
				'url_foto' => $this->input->post('url_foto',TRUE),
				'kondisi' => $this->input->post('kondisi',TRUE),
				'lama_penggunaan' => $this->input->post('lama_penggunaan',TRUE),
				'no_ktp' => $this->input->post('no_ktp',TRUE),
				'nama_level' => $this->input->post('nama_level',TRUE),
				'porsi_royalti' => $this->input->post('porsi_royalti',TRUE),
				'harga_sewa' => $this->input->post('harga_sewa',TRUE),
	    	);

            $cek=$this->Barang_model->cek_id($data);
			$num=$cek->num_rows();
			
			if($num>0)
			{
				echo "<script>alert('Id Barang sudah ada')</script>";
				redirect ('barang/create_data','refresh');
			}
			else
			{
				$this->Barang_model->insert_barang($data);
				$this->Info_barang_level_model->insert_info($data);
			}
			redirect(site_url('input_sukses'));
        }
	}
	
	public function update($id) 
    {
		$row = $this->Barang_model->get_by_id($id);
		$row1 = $this->Info_barang_level_model->get_by_id($id);

        if ($row && $row1) {
            $data = array(
            'action' => site_url('barang/update_action'),
			'id_barang' => set_value('id_barang',$row->id_barang),
			'nama' => $this->Item_model->get_nitem(),
			'warna' => set_value('warna',$row->warna),
			'url_foto' => set_value('url_foto',$row->url_foto),
			'kondisi' => set_value('kondisi',$row->kondisi),
			'lama_penggunaan' => set_value('lama_penggunaan',$row->lama_penggunaan),
			'no_ktp' => $this->Anggota_model->get_no_ktp(),
			'nama_level' => $this->Level_model->getNama(),
			'porsi_royalti' => set_value('porsi_royalti',$row1->porsi_royalti),
			'harga_sewa' => set_value('harga_sewa',$row1->harga_sewa),
		);
            $this->load->view('input_barang', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_barang', TRUE));
        } else {
            $data = array(
				'id_barang' => $this->input->post('id_barang',TRUE),
				'nama' => $this->input->post('nama',TRUE),
				'warna' => $this->input->post('warna',TRUE),
				'url_foto' => $this->input->post('url_foto',TRUE),
				'kondisi' => $this->input->post('kondisi',TRUE),
				'lama_penggunaan' => $this->input->post('lama_penggunaan',TRUE),
				'no_ktp' => $this->input->post('no_ktp',TRUE),
				'nama_level' => $this->input->post('nama_level',TRUE),
				'porsi_royalti' => $this->input->post('porsi_royalti',TRUE),
				'harga_sewa' => $this->input->post('harga_sewa',TRUE),
				);

			$this->Barang_model->update_barang($this->input->post('id_barang', TRUE), $data);
			$this->Info_barang_level_model->update_info($this->input->post('id_barang', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('update_sukses'));
        }
	}
	
	public function delete($id) 
    {
        $row = $this->Barang_model->get_by_id($id);
		$row1 = $this->Info_barang_level_model->get_by_id($id);

        if ($row && $row1) {
			$this->Barang_model->delete_barang($id);
			$this->Info_barang_level_model->delete_info($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('delete_sukses'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
        }
    }

	
}
