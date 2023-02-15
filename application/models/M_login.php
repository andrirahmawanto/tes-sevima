<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_login extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }  

  function get_user($username,$password){
    $this->db->select('*');
    $this->db->from('tb_pengguna');   
    $this->db->where('username', $username);
    $this->db->where('password', md5($this->input->post('password')));    
    $query = $this->db->get();    
    return $query;
  }
  function get_admin($username,$password){
    $this->db->select('*');
    $this->db->from('tb_pengguna');   
    $this->db->where('username', $username);
    $this->db->where('password', md5($this->input->post('password')));    
    $query = $this->db->get();    
    return $query;
  }
  function get_tim($username,$password){
    $this->db->select('*');
    $this->db->from('v_tim');   
    $this->db->where('username', $username);
    $this->db->where('password', md5($this->input->post('password')));    
    $query = $this->db->get();    
    return $query;
  }
  
}  
?>