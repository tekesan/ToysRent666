<?php
class Item_model extends CI_Model{
  
  function __construct()
  {
    parent::__construct();
  }

  function get_all()
  {
    $query = $this->db->query("select * from item");
    return $query;
  }

  function get_nitem()
  {
    $query = $this->db->query("select nama from item");
    return $query;
  }

  function update_item($data, $id)
  {
    $this->db->query("update item set nama = '$data[nama]', deskripsi = '$data[deskripsi]', usia_dari = $data[usia_dari], usia_sampai = $data[usia_sampai], bahan = '$data[bahan]' where nama = '$id'");
  }

  function insert_item($data){
    $this->db->query("insert into item (nama, deskripsi, usia_dari, usia_sampai, bahan) values ('$data[nama]', '$data[deskripsi]', $data[usia_dari], $data[usia_sampai], '$data[bahan]')");

  }

  function delete_item($nama){
    $this->db->query("delete from item where nama = '$nama'");
  }

  function get_item_by_id($nama){
    $query = $this->db->query("select * from item where nama = '$nama'");
    $result = $query->row_array();
    return $result;
  }
}