<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
 public function __construct()
 {
  parent::__construct();    
  $this->load->model('M_login');
  $this->load->library(array('form_validation','session'));    
  $this->load->database();    
  $this->load->helper('url');    
}

function index(){
 $session = $this->session->userdata('isLogin');
 if($session == FALSE)
 {
  redirect('admin/cek_login');
}else
{
  redirect('dashboard');
}
}

function cek_login(){
  $this->form_validation->set_rules('username', 'Username', 'required');
  $this->form_validation->set_rules('password', 'Password', 'required');
  $this->form_validation->set_error_delimiters('<span class="error">', '</span>');

  if($this->form_validation->run()==FALSE)
  {
    $this->load->view('v_admin');
  }else
  {
   $username = $this->input->post('username');
   $password = $this->input->post('password');

   $cek = $this->M_login->get_admin($username, $password);
   // var_dump($cek->num_rows());
   if($cek->num_rows() <> 0){
    $data = $cek->row();     
    $id_pengguna      = $data->id_pengguna ;  
    $this->session->set_userdata('isLogin', TRUE);
    $this->session->set_userdata('username',$username);    
    $this->session->set_userdata('id_pengguna', $id_pengguna);
    if ($data->level == 1) {
      $this->session->set_userdata('level','1');
      redirect('dashboard');
    }elseif($data->level == 2){
        $this->session->set_userdata('level','2');
      redirect('dashboard');
    }
    elseif($data->level == 3){
        $this->session->set_userdata('level','3');
      redirect('dashboard');
    }
  }else{
     echo " <script>
     alert('Login Gagal: Cek Kembali username dan password yang anda masukkan . . ');
     history.go(-1);
     </script>";        
   
 }  
}
}
function logout(){
  $this->session->sess_destroy();
  $url=base_url('');
  redirect('Admin');
}

}

