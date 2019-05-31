<?php
class Login_model extends CI_Model{
    
    function validate($no_ktp,$email){
        $query = $this->db->query("select * from pengguna p join anggota a on p.no_ktp = a.no_ktp join alamat al on a.no_ktp = al.no_ktp_anggota where p.no_ktp = '$no_ktp' and p.email = '$email'");
        return $query;
  }
 
  function validate_admin($no_ktp,$email){
        $query = $this->db->query("select * from pengguna p join admin a on p.no_ktp = a.no_ktp where p.no_ktp = '$no_ktp' and p.email = '$email'");
        return $query;
  }

}