<?php

class Authen_test extends TestCase {
    public function test_index()
	{
		$output = $this->request('GET', 'Authen/index');
		$this->assertRedirect ('Home');
		$this->assertContains('<title>FUTSAL.in</title>', $output); 
	}
        
    
  
}
?>