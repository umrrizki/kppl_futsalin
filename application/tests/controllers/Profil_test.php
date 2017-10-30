<?php

class Profil_test extends TestCase {
	
		public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('Model_futsal');
            $this->objek = $this->CI->Model_futsal;
            $this->form_validation = new CI_Form_validation();
             
        }


	public function test_index(){
        $_SESSION['id_user'] = "1";
		$_SESSION['username'] = "umar";
		$output = $this->request('GET', 'Profil/index');
		$this->assertContains('<title>FUTSAL.in</title>', $output);
        }
		
	public function test_index_notlogged(){
            $output = $this->request('GET', 'Profil/index');
            $this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('login');
        }
		
	public function test_edit_profil(){
			$_SESSION['id_user'] = "1";
            $_SESSION['username'] = "umar";
			
	

            $expected = array('quote' => 'hh', 
								'alamat_user' => 'jets' , 
								'ttl_user' =>'17/09', 
								'phone_user' => '078', 
								'deskripsi'=>'singat', 
								'image'=>'assets/img/up.png');

            

            $filename = 'up.png';
            $filepath = 'D:/'.$filename;
            $files = [
                            'file1' => [
                                    'name'     => $filename,
									'type'     => 'gif/png/jpg',
                                    'tmp_name' => $filepath,
                            ],
                    ];
        $this->request->setFiles($files);
		$this->request(
			'POST',
			'Profil/edit_profil', $expected
		);

		$indb = array($this->objek->tampil_profil($_SESSION['id_user']));

			$this->assertEquals($expected,$indb);
	}
	
	public function test_edit_profil_nouploadfalse(){
			$_SESSION['id_user'] = "1";
            $_SESSION['username'] = "umar";
            
			$output = $this->request('POST', 'Profil/edit_profil',
									['id_user'=> '1']);
			$this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('Profil');
	}
		
}