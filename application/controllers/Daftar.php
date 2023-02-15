<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_pengguna');
        $this->load->helper('form','url','number');
        $this->load->library('form_validation');
    }    
    public function index(){
        $this->load->view('v_daftar');
    }
    function input(){
		if(isset($_POST['btnsimpan']))
		{
			$username       = $this->input->post('username'); 
			$nama_pengguna  = $this->input->post('full_name'); 
			$email         	= $this->input->post('email'); 
			$password       = md5($this->input->post('password')); 

			$data = array(
				'username'          => $username,
				'nama_pengguna'     => $nama_pengguna,
				'password'          => $password,
				'email'  		    => $email
			);

			$this->M_pengguna->insert($data);
			redirect(site_url('admin'));
		}
		else {
			redirect(site_url('daftar'));

		}
	}

}

