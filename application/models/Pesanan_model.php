<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesanan_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }
    //ambil semua pesanan
    function get_semua_pesanan()
    {
        $sql = "select * from pemesanan";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_data_pesanan()
    {
        $sql = "select id_pemesanan, harga_sewa+ongkos as harga, status from pemesanan order by datetime_pesanan desc";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_barang_pesan(){
        $sql = "select b.nama_item, bp.id_pemesanan from barang b join barang_pesanan bp on b.id_barang = bp.id_barang";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_nama_barang(){
        $sql = "select * from barang";
        $query = $this->db->query($sql);
        return $query;
    }

    function get_nama_anggota(){
        $sql ="select p.nama_lengkap, a.no_ktp from anggota a join pengguna p on a.no_ktp=p.no_ktp";
        $query = $this->db->query($sql);
        return $query;
    }

    //delete pesanan
    function delete_pesanan($id){
        $sql = "delete from pemesanan where id_pemesanan = '$id'";
        $this->db->query($sql);
    }

    function get_last_id_pemesanan(){
        $sql = "select * from pemesanan order by id_pemesanan desc limit 1";
        $query = $this->db-query($sql);
        $result = $query->result()->id_pemesanan;
        return $result;
    }

}