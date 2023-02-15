<?php if(!defined('BASEPATH')) exit('Hacking Attempt : Keluar dari sistem..!!');

class M_pengguna extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  } 
  function getAll(){
   $this->db->select('*');
   $this->db->from('tb_pengguna');
   $query = $this->db->get();
   return $query->result();
 } 
 function calon_pengguna(){
   $this->db->select('*');
   $this->db->from('tb_pengguna');
   $this->db->where('level','3');
   $query = $this->db->get();
   return $query->result();
 } 
 function insert($data){
  $this->db->insert('tb_pengguna',$data);
}
function edit_pengguna($data,$id){
  $this->db->where('id_pengguna',$id);
  $this->db->update('tb_pengguna',$data);
}
function delete_pengguna($id) {
  $this->db->where('id_pengguna', $id);
  $this->db->delete('tb_pengguna');
  if ($this->db->affected_rows() == 1) {
    return TRUE;
  }
  return FALSE;
}
function get_user(){
   $this->db->select('*');
   $this->db->from('tb_user');
   $query = $this->db->get();
   return $query->result();
 }
 function edit_user($data,$id){
  $this->db->where('id_user',$id);
  $this->db->update('tb_user',$data);
}
}
?>
