<?php

class GDice {
	
	private $value = null;
	
	public function __construct($min,$max)
	{
	$this->value = rand($min,$max);
	}
	
	public function Roll($min,$max){
	
	}
	
	public function getvalue(){
	return $this->value;
	}
	
	}
	