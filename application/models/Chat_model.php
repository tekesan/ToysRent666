<?php
class Chat_model extends CI_Model{
  
  function __construct()
  {
        parent::__construct();
  }

  function get_nama_anggota($no_ktp)
  {
      $query = $this->db->query("select nama_lengkap,date_time,no_ktp_anggota,no_ktp_admin from (select DISTINCT ON (nama_lengkap)* from chat, pengguna where no_ktp_anggota=pengguna.no_ktp and no_ktp_admin='$no_ktp' order by nama_lengkap, date_time desc) a order by date_time desc ");
      return $query;
  }

  function get_nama_admin($no_ktp)
  {
      $query = $this->db->query("select nama_lengkap,date_time,no_ktp_anggota,no_ktp_admin from (select DISTINCT ON (nama_lengkap)* from chat, pengguna where no_ktp_admin=pengguna.no_ktp and no_ktp_anggota='$no_ktp' order by nama_lengkap, date_time desc) a order by date_time desc ");
      return $query;
  }

  function get_conv_anggota($no_ktp_anggota, $no_ktp_admin)
  {
    $query = $this->db->query("select pesan, date_time from chat, pengguna where no_ktp_anggota=pengguna.no_ktp and no_ktp_anggota='$no_ktp_anggota' and no_ktp_admin='$no_ktp_admin' and keterangan=TRUE order by date_time asc");
    return $query;
  }

  function get_conv_admin1($no_ktp_anggota, $no_ktp_admin)
  {
    $query = $this->db->query("select pesan, date_time from chat, pengguna where no_ktp_anggota=pengguna.no_ktp and no_ktp_anggota='$no_ktp_anggota' and no_ktp_admin='$no_ktp_admin' and keterangan=FALSE order by date_time asc");
    return $query;
  }

  function get_ktp_admin($no_ktp)
  {
    $query = $this->db->query("select no_ktp_admin from chat where no_ktp_admin='$no_ktp'");
    return $query->row();
  }
 
  function get_conv_admin($no_ktp_anggota, $no_ktp_admin)
  {
    $query = $this->db->query("select pesan, date_time from chat, pengguna where no_ktp_anggota=pengguna.no_ktp and no_ktp_anggota='$no_ktp_anggota' and no_ktp_admin='$no_ktp_admin' and keterangan=FALSE order by date_time asc");
    return $query;
  }

  function get_conv_anggota1($no_ktp_anggota, $no_ktp_admin)
  {
    $query = $this->db->query("select pesan, date_time from chat, pengguna where no_ktp_anggota=pengguna.no_ktp and no_ktp_anggota='$no_ktp_anggota' and no_ktp_admin='$no_ktp_admin' and keterangan=TRUE order by date_time asc");
    return $query;
  }

  function insert_chat($data)
  {
    $this->db->query("insert into chat (id,pesan,date_time,no_ktp_anggota,no_ktp_admin,keterangan) values ((select max(cast ((id) as integer))+1 from chat),'$data[pesan]',NOW(),'$data[no_ktp_anggota]','$data[no_ktp_admin]',FALSE)");
  }

  function insert_chat1($data)
  {
    $this->db->query("insert into chat (id,pesan,date_time,no_ktp_anggota,no_ktp_admin,keterangan) values ((select max(cast ((id) as integer))+1 from chat),'$data[pesan]',NOW(),'$data[no_ktp_anggota]','$data[no_ktp_admin]',TRUE)");
  }
}