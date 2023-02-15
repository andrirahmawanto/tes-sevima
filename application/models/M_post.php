<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_post extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  } 
  function input_data($data){
    $this->db->insert('tb_post',$data);
  }
}
?>
