<?php

class Logout_test extends TestCase {
    public function test_keluar()
	{
		$output = $this->request('GET', 'Authen/index');
		$this->assertRedirect ('Home');
		$this->assertContains('<title>FUTSAL.in</title>', $output); 
	}
        
  
}
?>