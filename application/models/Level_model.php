<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Level_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }
    // fungsi tampil level
    function getLevel(){
        $data = "select * from level_keanggotaan";
        $query = $this->db->query($data);
        return $query;
    }
    //fungsi delete level
    function deleteLevel($poin){
        $data = "delete from level_keanggotaan where minimum_poin = $poin";
        $this->db->query($data);
    }

    function insertLevel($value){
        $this->db->query("insert into level_keanggotaan (nama_level, minimum_poin, deskripsi) values ('$value[nama_level]',$value[minimum_poin],'$value[deskripsi]')");
    }

    function get_level_by_nama($nama){
        $sql = "select * from level_keanggotaan where nama_level='$nama'";
        $query = $this->db->query($sql);
        $result = $query->row_array();
        return $result;
    }

    function getNama(){
        $query = $this->db->query("select nama_level from level_keanggotaan");
        return $query;
    }

    function update_level($data, $idnama){
        $this->db->query("update level_keanggotaan set nama_level='$data[nama_level]', minimum_poin=$data[minimum_poin], deskripsi='$data[deskripsi]' where nama_level='$idnama'");
    }
}
?>