<?php

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Delivery_model extends CI_Model {



		public function __construct(){

			parent::__construct();

			$this->load->database('default', TRUE);

		}

		public function getBarang($uname)
		{

			$que = "SELECT p.id_pemesanan, b.nama_item, b.id_barang FROM PEMESANAN as p, BARANG_PESANAN as bp, BARANG as b WHERE p.id_pemesanan = bp.id_pemesanan and bp.id_barang = b.id_barang and no_ktp_pemesan LIKE '".$uname."'";

			return $this->db->query($que)->result();

		}

        public function getDaptar()
        {

            $que = "SELECT * FROM PENGIRIMAN";

            return $this->db->query($que)->result();

        }

        public function getDataDeliv($id,$ktp)
        {

            $que = "SELECT * FROM PENGIRIMAN, PEMESANAN as p, BARANG_PESANAN as bp, BARANG as b WHERE p.id_pemesanan = bp.id_pemesanan and bp.id_barang = b.id_barang and no_ktp_pemesan LIKE '".$ktp."'and NO_RESI = '$id'";

            return $this->db->query($que)->result();

        }

        public function getAlamat($uname)
        {

            $que = "SELECT  FROM PEMESANAN as p, BARANG_PESANAN as bp, BARANG as b WHERE p.id_pemesanan = bp.id_pemesanan and bp.id_barang = b.id_barang and no_ktp_pemesan LIKE '".$uname."'";

            return $this->db->query($que)->result();

        }

        public function insertDeliv($id_pemesanan, $brg, $metode, $tgl, $no_ktp, $alamat)
        {
            $result = '';
            $rese = '';

            for ($i = 0; $i < 8; $i++) {
                $result .= mt_rand(0, 9);
            }

            for ($x = 0; $x < 3; $x++) {
                $rese .= mt_rand(0, 9);
            }




            $queque = "INSERT INTO pengiriman (no_resi, id_pemesanan, metode, ongkos, tanggal, no_ktp_anggota, nama_alamat_anggota) values ('$result', '$id_pemesanan', '$metode', 5000, '$tgl', '$no_ktp', '$alamat')";

            $barang_kirim_uwauwa = "INSERT INTO barang_dikirim (no_resi, id_barang, tanggal_review, no_urut, review) values ('$result', '$brg', '$tgl', '$rese', '')";

            $norak = $this->db->query($queque);


            if ($norak > 0) {

                $aselole = $this->db->query($barang_kirim_uwauwa);

                if ($aselole > 0) {
                    return true;
                } else {

                    return false;
                }

            }else{
                    return false;
                }

        }

        public function updateDeliv($no_res, $id_pemesanan, $metode, $tgl, $no_ktp, $alamat)
        {


            $queque = "UPDATE pengiriman set (id_pemesanan, metode, ongkos, tanggal, no_ktp_anggota, nama_alamat_anggota) = ('$id_pemesanan', '$metode', 5000, '$tgl', '$no_ktp', '$alamat') 
                        WHERE no_resi = '$no_res'";

            $norak = $this->db->query($queque);



            if($norak > 0)
                return true;

            else
                return false;

        }

        public function updateReview($no_res, $tgl, $review)
        {


            $queque = "UPDATE barang_dikirim set (tanggal_review, review) = ('$tgl', '$review') 
                        WHERE no_resi = '$no_res'";

            $norak = $this->db->query($queque);



            if($norak > 0)
                return true;

            else
                return false;

        }


        public function snapfingerthanosDelivery($id)
        {

            $queque = "DELETE FROM pengiriman WHERE no_resi = '$id'";

            $norak = $this->db->query($queque);

            if($norak > 0)
                return true;

            else
                return false;

        }



	}