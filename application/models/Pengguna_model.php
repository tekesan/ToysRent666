<?php
class Pengguna_model extends CI_Model{
  
  function __construct()
  {
    parent::__construct();
  }

  function get_pengguna()
  {
    $query = $this->db->query("select * from pengguna");
    return $query;
  }
}