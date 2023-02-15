<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
public function __construct() {
        parent::__construct();
        $this->load->model('M_dashboard');
        $this->load->helper('form','url','number');
        $this->load->library('form_validation');
    }    
    public function index(){
        $this->load->view('v_daftar');
    }


}

