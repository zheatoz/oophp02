<?php
include 'Player.php'; 

class gametest {

	public $player;
	public $gamestate = true;
	
	
	
	public function __construct()
	{
		$this->player = new Player();

	}
	
	public function adddice(){
		if($this->gamestate == true){
			$this->player->addDice(1,6);
		}
	}
	
	public function savedice(){
		if($this->gamestate == true){
			$this->player->savevalues();
			$this->player->clear();
		}
	//	$html .= "Score är = 0";
	//	$html .=  "<p>Totala Scoren är = " . ($game->player->getscore());
	}
	
	public function restartdice(){
		$this->restart();
		$game->gamestate = true;
	}	
	
	public function restart(){
		$this->gamestate = true;
		unset($this->player);
		$this->player = new Player();
	
	}
	
	public function gethtml(){
		$html = null;
		if($this->player->getlast() == 1){
			$html .= "Score är = 0";
			$html .=  "<p>Totala Scoren är = " . ($this->player->getscore());
			$this->player->clear();
		}else if($this->player->getvalues()+$this->player->getscore() >= 100){
			$this->gamestate = false;
			$html .= "Grattis du har vunnit på "  . $this->player->getnumdice() . " drag.";
			$html .= "<p>Du använde spara funtionen "  . $this->player->getsaves() . " gånger.";
			$html .=  "<p>Totala Scoren är = " . ($this->player->getvalues()+$this->player->getscore());
		}else{		
			$html .= "Score är = "  . $this->player->getvalues();
			$html .=  "<p>Totala Scoren är = " . ($this->player->getvalues()+$this->player->getscore());
		}
		$html .=  "<p>Senaste tärningskastet gav en " . $this->player->getlast() . ":a";	
		return $html;
	}
	
	public function getgamestate(){
		return $this->gamestate;
	}
	
}
	
	
	
