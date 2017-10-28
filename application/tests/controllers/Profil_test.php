<?php

class Profil_test extends TestCase {
	
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
			'Profil/edit_profil/1', 
				[
								'quote' => 'hh', 
								'alamat_user' => 'jets' , 
								'ttl_user' =>'17/09', 
								'phone_user' => '078', 
								'deskripsi'=>'singat', 
								'image'=>'up'
				]
		);
			$this->assertEquals('umar',$_SESSION['username']);
	}
	
	public function test_edit_profil_nouploadfalse(){
			$_SESSION['id_user'] = "1";
            $_SESSION['username'] = "umar";
            
			$output = $this->request('POST', 'Profil/edit_profil/1',
									['id_user'=> '1']);
			$this->assertFalse( isset($_SESSION['id_user'], $output) );
			$this->assertRedirect('Profil');
	}
		
}