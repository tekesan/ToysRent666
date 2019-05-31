<?php
class Profile_model extends CI_Model{
  
  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
  }

  function get_profile($no_ktp)
  {
    $query = $this->db->query("select * from pengguna p join anggota a on p.no_ktp = a.no_ktp join alamat al on p.no_ktp = al.no_ktp_anggota where p.no_ktp = '$no_ktp'");
    $result = $query->row();
    return $result;
  }
}