<?php

class Home_test extends TestCase {
    public function test_index()
	{
		$output = $this->request('GET', 'Home');
		$this->assertContains('<title>FUTSAL.in</title>', $output); 
	}
        
    
  
}
?>