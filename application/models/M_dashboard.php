<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {        
  function __construct() {
    parent::__construct();
  }   
  function getData(){
    $this->db->select('*');
    $this->db->from('v_post');
    $query = $this->db->get();
    return $query->result();
  }  
   
}