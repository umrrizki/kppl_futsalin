class Booking extends CI_Controller{

function __construct(){
		parent::__construct();		
		$this->load->model('Model_futsal');
	}


public function index(){

		//$data = $this->Model_futsal->tampil_lapangan();
		//$this->load->view('Home',array('data' => $data));	
$this->load->view('Booking');
	}



} ?>