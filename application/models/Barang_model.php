<?php
class Barang_model extends CI_Model{
  
  function __construct()
  {
        parent::__construct();
  }

  function get_all()
  {
        $query = $this->db->query("select * from barang");
        return $query;
  }

  function get_detail_id($id)
  {
        $query = $this->db->query("select * from barang where id_barang='$id'");
        return $query;
  }

  function get_by_id($id)
  {
        $query = $this->db->query("select * from barang where id_barang='$id'");
        return $query->row();
  }

  function cek_id($data)
  {
        $query = $this->db->query("select * from barang where id_barang=UPPER('$data[id_barang]') OR id_barang=LOWER('$data[id_barang]')");
        return $query;
  }

  function insert_barang($data)
  {
        $this->db->query("insert into barang (id_barang,nama_item,warna,url_foto,kondisi,lama_penggunaan,no_ktp_penyewa) values ('$data[id_barang]','$data[nama]','$data[warna]','$data[url_foto]','$data[kondisi]','$data[lama_penggunaan]','$data[no_ktp]')");
  }

  function update_barang($id,$data)
  {
        $this->db->query("update barang set id_barang='$data[id_barang]',nama_item='$data[nama]',warna='$data[warna]',url_foto='$data[url_foto]',kondisi='$data[kondisi]',lama_penggunaan='$data[lama_penggunaan]',no_ktp_penyewa='$data[no_ktp]' where id_barang='$id'");
  }
 
  function delete_barang($id)
  {
        $this->db->query("delete from barang where id_barang='$id'");
  }
}