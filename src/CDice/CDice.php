<?php

class CDice {

	private $Score = array();
	
  /**
   * Constructor
   *
   */
  public function __construct() {
    ;
  }
  
  public function Roll($times){
	$this->Score = array();
	for($i = 0;$i < $times;$i++){
		$this->Score[] = rand(1,6);
	}
  }
  
  public function GetResults() {
  return $this->Score;
  }
  
  public function GetTotal() {
	return array_sum($this->Score);
	}
}
