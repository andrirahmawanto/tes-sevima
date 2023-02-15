<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Post extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('M_post');
        $this->load->helper('form','url','number');
        $this->load->library('form_validation');
        if(empty($this->session->userdata('username'))) {
            $this->session->set_flashdata('isLogin',false);
            redirect('Admin');
        }
    }    
    public function index(){
        $this->load->view('layouts/header');
        $this->load->view('layouts/sidebar');
        $this->load->view('v_post');
        $this->load->view('layouts/footer');
    }
    function input_post(){
    	if(isset($_POST['btnsimpan']))
    	{	
    		$this->load->library('upload');
    		$isi			= $this->input->post('isi');
            $id_pengguna    = $this->session->userdata('id_pengguna');

    		$fileUpload = array();            
    		$isUpload   = false;          
    		$config  = array(
    			'upload_path'   => './assets/upload_foto/',
    			'allowed_types' => 'PNG|png|JPG|jpg|jpeg|JPEG|JPG|GIF|gif',
    			'file_name'    =>  'foto-'.date('m-d-Y_hi'), 
    		);

    		$this->upload->initialize($config);
    		if ($this->upload->do_upload('userfile')) {
    			$fileUpload = $this->upload->data();
    			$this->image_lib->initialize(array(
                    'image_library' => 'gd2', //library yang kita gunakan
                    'source_image' => './assets/upload_foto/'. $fileUpload['file_name'],
                    'maintain_ratio' => false,
                    'create_thumb' => false,
                    'width' => 720,
                    'height' => 720
                ));
    			$this->image_lib->resize();
    			$isUpload = true;
    		}	else{
    			$data['error'] = $this->upload->display_errors();
    		}

    		$data = array( 			
    			'isi'  		        => $isi,
                'id_pengguna'       => $id_pengguna
    		);
    		if ($isUpload==true){ 
    			$data=array('foto'=> $fileUpload['file_name'])+$data; 
    		}

			$this->M_post->input_data($data);
    		redirect($_SERVER['HTTP_REFERER']);
    		// var_dump($data);
    	}
    	else {
    		redirect($_SERVER['HTTP_REFERER']);

    	}
    }

}