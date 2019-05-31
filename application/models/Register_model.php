<?php
class Register_model extends CI_Model{
  
  function __construct()
  {
    parent::__construct();
  }

  function validate_anggota($no_ktp,$email){
        $query = $this->db->query("select * from pengguna p join anggota a on p.no_ktp = a.no_ktp join alamat al on a.no_ktp = al.no_ktp_anggota where p.no_ktp = '$no_ktp' or p.email = '$email'");
        return $query;
  }

  function validate_admin($no_ktp,$email){
        $query = $this->db->query("select * from pengguna p join admin a on p.no_ktp = a.no_ktp where p.no_ktp = '$no_ktp' or p.email = '$email'");
        return $query;
  }

  function register_anggota($data, $data_alamat){

    $this->db->query("insert into pengguna (no_ktp, nama_lengkap, email, tanggal_lahir, no_telp) values ('$data[no_ktp]', '$data[nama_lengkap]', '$data[email]', '$data[tanggal_lahir]', '$data[no_telp]')");
    $this->db->query("insert into anggota (no_ktp, poin, level) values ('$data[no_ktp]', 0, 'Bronze')");
    $this->db->query("insert into alamat (no_ktp_anggota, nama, jalan, nomor, kota, kodepos) values ('$data[no_ktp]', '$data[nama_lengkap]', '$data_alamat[0]', $data_alamat[1], '$data_alamat[2]', '$data_alamat[3]')");
  }

  function register_admin($data){

    $this->db->query("insert into pengguna (no_ktp, nama_lengkap, email, tanggal_lahir, no_telp) values ('$data[no_ktp]', '$data[nama_lengkap]', '$data[email]', '$data[tanggal_lahir]', '$data[no_telp]')");
    $this->db->query("insert into admin (no_ktp) values ('$data[no_ktp]')");
  }
}