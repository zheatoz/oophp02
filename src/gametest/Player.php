<?php
include 'GDice.php'; 

class Player {
	
	private $dice = array();
	private $score = 0;
	private $numdice = 0;
	private $saves = 0;
	private $lastvalue = 0;
	public function __construct(){

	}

	public function addDice($value1,$value2){
		array_push($this->dice, new GDice($value1,$value2));
		$temp = count($this->dice)-1;
		$this->lastvalue = $this->dice[$temp]->getvalue();
		
		$this->numdice++;
	}
	
	public function clear(){
		//unset($this->dice);
		unset($GLOBALS["dice"]);
		$this->dice = array();
	}
		
	public function getvalues(){
		$temp = 0;
		for($i = 0; $i < count($this->dice);$i++){
			$temp += $this->dice[$i]->getvalue();
		}
		return $temp;

	}
	
	public function getscore(){
		return $this->score;
	}
	
	public function getnumdice(){
		return $this->numdice;
	}
		
	public function getsaves(){
		return $this->saves;
	}	
	
	public function savevalues(){
		$temp = 0;
		for($i = 0; $i < count($this->dice);$i++){
			$temp += $this->dice[$i]->getvalue();
		}
		$this->score += $temp;
		$this->saves++;
	}
	
	public function getlast(){
		return $this->lastvalue;
	}
	
	}
	