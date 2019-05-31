<?php
class Anggota_model extends CI_Model{
  
  function __construct()
  {
        parent::__construct();
  }

  function get_no_ktp()
  {
        $query = $this->db->query("select no_ktp from anggota");
        return $query;
  }
 
}