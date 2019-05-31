<?php
class Info_barang_level_model extends CI_Model{
  
  function __construct()
  {
        parent::__construct();
  }

  function insert_info($data)
  {
      $this->db->query("insert into info_barang_level (id_barang,nama_level,harga_sewa,porsi_royalti) values ('$data[id_barang]','$data[nama_level]','$data[harga_sewa]','$data[porsi_royalti]')");
  }

  function get_detail_by_id($id)
  {
        $query = $this->db->query("select * from info_barang_level where id_barang='$id'");
        return $query;
  }

  function get_by_id($id)
  {
        $query = $this->db->query("select * from info_barang_level where id_barang='$id'");
        return $query->row();
  }

  function update_info($id,$data)
  {
        $this->db->query("update info_barang_level set porsi_royalti='$data[porsi_royalti]' where id_barang='$id' and nama_level='$data[nama]'");
  }

  function delete_info($id)
  {
        $this->db->query("delete from info_barang_level where id_barang='$id'");
  }
 
}