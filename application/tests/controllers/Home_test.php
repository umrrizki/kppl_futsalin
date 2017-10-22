<?php

class Home_test extends TestCase {
    public function test_index()
	{
		$_SESSION['username'] = 'umar';
		$output = $this->request('GET', 'Home');
		$this->assertContains('<title>FUTSAL.in</title>', $output); 
	}
        
    
  
}
?>