<?php

class Profil extends CI_Controller{

function __construct(){
		parent::__construct();		
		 if(!$this->session->userdata('id_user'))
			redirect('login');
		
		$this->load->model('Model_futsal');
	}


public function index(){
		$id=$this->session->userdata('id_user');
		$data = $this->Model_futsal->tampil_profil($id);
		$this->load->view('Profil', array('data' => $data));	
	}



}

?>