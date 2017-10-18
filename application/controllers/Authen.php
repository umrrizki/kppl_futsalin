<?php 
 
class Authen extends CI_Controller{
 
	function __construct(){
		parent::__construct();
	
		if(!$this->session->userdata('username') )
			redirect('Login');
		
  $this->load->helper('url');
        
        $this->load->database();
	}
 
	function index(){
		//$data['lapangan'] = $this->Model_futsal->tampil_lapangan();
		//$data['transaksi'] = $this->Model_futsal->tampil_bayar();
		//$this->load->view('Home, $data);
redirect('Home');
	}

      
}
?>