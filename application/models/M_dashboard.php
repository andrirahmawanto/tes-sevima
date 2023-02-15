<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {        
  function __construct() {
    parent::__construct();
  }   
   function tot_produk_indoor() {        
     $sql="select count(id_produk) as total
     from 
        tb_produk
      where kategori_produk = 'indoor'
     ";
     return $this->db->query($sql)->result();
   }
   function tot_produk_outdoor() {        
     $sql="select count(id_produk) as total
     from 
        tb_produk
      where kategori_produk = 'outdoor'
     ";
     return $this->db->query($sql)->result();
   }
   function tot_produk_kaca() {        
     $sql="select count(id_produk) as total
     from 
        tb_produk
      where kategori_produk = 'kaca'
     ";
     return $this->db->query($sql)->result();
   }
   function tot_klien() {        
     $sql="select count(id_klien) as total
     from 
        tb_klien
     ";
     return $this->db->query($sql)->result();
   }
   
   
}