<?php

class Profil_test extends TestCase {
	
		public function setUp()
        {
            $this->resetInstance();
            $this->CI->load->model('Model_futsal');
            // $this->objek = $this->CI->Model_futsal;
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
			$_SESSION['id_user'] = "3";
            $_SESSION['username'] = "bagus";
			
	

            $expected = array(//'id_user' => '3', 
            	//'username' => 'bagus', 
            	//'password' => 'siapmaju', 
            	//'nama_pjg' => 'ahay', 
            	'quote' => 'aye',
								'alamat_user' => 'jets' , 
								'ttl_user' =>'17/09', 
								'phone_user' => '078', 
								'deskripsi'=>'singat', 
								'image'=>'assets/img/profil_puji.jpg');

            

            $filename = 'profil_puji.jpg';
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
			'Profil/edit_profil', ['quote' => 'aye',
								'alamat_user' => 'jets' , 
								'ttl_user' =>'17/09', 
								'phone_user' => '078', 
								'deskripsi'=>'singat', 
								'image'=>'assets/img/profil_puji.jpg']
		);

		$updated = $this->CI->Model_futsal->tampil_profil(3);
		$actual = $expected['quote'];
		// $actual2 = $updated->alamat_user;
		// $actual3 = $updated->ttl_user;
		// $actual4 = $updated->phone_user;
		// $actual5 = $updated->deskripsi;
		// $actual6 = $updated->image;
		foreach ($updated as $x) {
			$this->assertEquals($actual,$x['quote']);
		}
			// $this->assertEquals($expected,$updated);
			// $this->assertEquals('jets',$actual2);
			// $this->assertEquals('17/09',$actual3);
			// $this->assertEquals('078',$actual4);
			// $this->assertEquals('singat',$actual5);
			// $this->assertEquals('assets/img/up.png',$actual6);
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