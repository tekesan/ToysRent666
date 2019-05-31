<?php
class Dashboard_model extends CI_Model{
  
  function __construct()
  {
    parent::__construct();
  }

  function get_jumlah_pesanan()
  {
    $pesanan = $this->db->count_all('pemesanan');
    
    return $pesanan; 
  }

  function get_jumlah_item()
  {
    $item = $this->db->count_all('item');

    return $item;
  }

  function get_jumlah_pengguna()
  {
    $pengguna = $this->db->count_all('pengguna');
    return $pengguna;
}

    function get_jumlah_pengiriman()
    {
    $pengiriman = $this->db->count_all('pengiriman');
    return $pengiriman;
    }
}