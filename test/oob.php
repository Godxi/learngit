<?php
require('ooa.php');
class oob{
	public function testOob(){
		$new = new ooa;
		$res = $new->getOoa();
		return $res;
	}
	
	$a = new oob();
	var_dump($a->testOob);
	
	//testOob();
	//echo 1234;die;
	
	//$this->testOob();
}
