<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_dashboard');
        $this->load->helper('form','url','number');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('isLogin',false);
            redirect('Admin');
        }
    }    
    public function index(){
        $x['post'] 		= $this->M_dashboard->getData();	
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('v_dashboard', $x);
        $this->load->view('layouts/footer');
    }

}