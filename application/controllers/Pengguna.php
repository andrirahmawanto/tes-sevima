<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('M_pengguna');
		$this->load->helper('form','url','number');
		$this->load->library('form_validation');
		if(empty($this->session->userdata('username'))) {
			$this->session->set_flashdata('isLogin',false);
			redirect('Admin');
		}
	}  
	public function index()
	{
		$x['data'] = $this->M_pengguna->getAll();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('v_pengguna', $x);
		$this->load->view('layouts/footer');
	}
	function input(){
		if(isset($_POST['btnsimpan']))
		{
			$this->load->library('upload');
			$username       = $this->input->post('username'); 
			$nama_pengguna  = $this->input->post('nama_pengguna'); 
			$level         	= $this->input->post('level'); 
			$password       = md5($this->input->post('password')); 

			$data = array(
				'username'          => $username,
				'nama_pengguna'     => $nama_pengguna,
				'password'          => $password,
				'level'  		    => $level
			);

			$this->M_pengguna->insert($data);
			redirect(site_url('pengguna'));
		}
		else {
			redirect(site_url('pengguna'));

		}
	}
	function edit(){
		if(isset($_POST['btnedit'])){
			$username       = $this->input->post('username'); 
			$nama_pengguna  = $this->input->post('nama_pengguna'); 
			$level         	= $this->input->post('level'); 

			$data = array(
				'username'          => $username,
				'nama_pengguna'     => $nama_pengguna,
				'level'  		    => $level
			);

			$id = $this->input->post('id_pengguna');
			$this->M_pengguna->edit_pengguna($data,$id);
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

		function ganti_password(){
		if(isset($_POST['btnreset'])){
		    $password         = md5($this->input->post('password'));
			$data = array(
				'password'          => $password
			);
			$id = $this->input->post('id_pengguna');
			$this->M_pengguna->edit_pengguna($data,$id);
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

		function reset_password(){
		if(isset($_POST['btnreset'])){
		    $password         = md5($this->input->post('password'));
			$data = array(
				'password'          => $password
			);
			$id = $this->input->post('id_pengguna');
			$this->M_pengguna->edit_pengguna($data,$id);
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	

	function delete_pengguna(){
		if(isset($_POST['btndelete'])){
			$id = $this->input->post('id_pengguna');
			$this->M_pengguna->delete_pengguna($id);
			redirect($_SERVER['HTTP_REFERER']);
		}else {
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	public function user()
	{
		$x['data'] = $this->M_pengguna->get_user();
		$this->load->view('layouts/header');
		$this->load->view('layouts/sidebar');
		$this->load->view('v_user', $x);
		$this->load->view('layouts/footer');
	}
	
	function aktif(){
		if(isset($_POST['btnaktif'])){
		    
			$data = array(
				'aktif'          => 1,
				'level'          => 0
			);
			$id = $this->input->post('id_user');
			$this->M_pengguna->edit_user($data,$id);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
	
	function level(){
		if(isset($_POST['btnaktif'])){
		    $level = $this->input->post('level');
			$data = array(
				'level'          => $level
			);
			$id = $this->input->post('id_user');
			$this->M_pengguna->edit_user($data,$id);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

}
