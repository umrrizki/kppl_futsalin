<?php

class Login_test extends TestCase {
    public function test_index()
	{
		$output = $this->request('GET', 'Login');
		$this->assertContains('<title>Futsal.in : Log In</title>', $output); 
	}

        public function test_aksi_login()
    {    
        $output = $this->request('POST', 'Login/aksi_login', 
					['username' => 'umar',
					 'password' => 'siapmaju'
					 ]);
        $this->assertEquals('umar', $_SESSION['username'], $output);
        $this->assertRedirect('Login/authenticate');
    }
    
    public function test_aksi_login_bukanuser()
    {
        $_SESSION['id_user'] = "2";
        $_SESSION['username'] = "xxxxxddddd";
        
        $output = $this->request('GET', 'Login/aksi_login');
        $this->assertRedirect('Login');
    }
	
	public function test_authenticate_ada_session()
		{
       $_SESSION['id_user'] = "1";
       $_SESSION['username'] = "umar";
            $this->request('GET','Login/aksi_login');
        $this->request('GET', 'Login/authenticate');
        
        $this->assertTrue( isset($_SESSION['username']) );
        $this->assertRedirect('Home'); 
		}
    public function test_authenticate_no_session()
        {
        $this->request('GET','Login/aksi_login');    
        $this->request('GET', 'Login/authenticate');
        
        $this->assertFalse( isset($_SESSION['username']) );
        $this->assertRedirect('Login');
        }
  
}