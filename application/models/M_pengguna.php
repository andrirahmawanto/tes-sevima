<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_pengguna extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  } 

 function insert($data){
  $this->db->insert('tb_pengguna',$data);
}
}
?>
