<?php

class Logout_test extends TestCase {
    public function test_index()
	{

		//$_SESSION['id_user'] = "1";
        //$_SESSION['username'] = "umar";
       // $this->assertTrue( isset($_SESSION['username']) );
        $this->request('GET', 'Logout');
        $this->assertRedirect('Login');
        $this->assertFalse( isset($_SESSION['username']) );

		//$output = $this->request('GET', 'Logout/keluar');
		
		//$this->assertTrue(isset($_SESSION['username'], $output));
	}
        
/*  public function test_keluar_direct()
	{
		 $_SESSION['username'] = "username";
            $this->request('GET', 'Logout/keluar');
            $this->assertRedirect('index.php/Login');
	}*/

}
?>