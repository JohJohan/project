<?php

class LoginTest extends TestCase {
	//
	public function testLogin(){
		//
		$response = $this->call('GET', '/');
		var_dump($response->getContent());
	}
}