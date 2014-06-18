<?php
class Tester {
	public $alive = 0;
	public $dead = 0;

	function aliveORDead($speedometer, $bomb) {
		
		if ($speedometer<50 && $bomb >0) {
			
		$this->dead = $this->dead + 1;
			return true;
		echo "Death, sorry. You had an armed bomb and you went under 50 mph, and the bus exploded.<br>
		<img src='fire.jpg' alt='expoding bus picture'>";	
		
		} else {
			if ($speedometer<50)/*this means no bomb armed*/
			{
				$this->alive = $this->alive +1;
				return false;
				echo "still alive, but there may be an armed bomb coming.<br>
				<image src="sandraheadache.jpg">
			}
			else {return;}

}





<?php
class Train{
	public $alive = 0;
	public $dead = 0;
	//test takes two arguments, if they are equal, the test passed.
	//in that case, $this->passed += 1
	//otherwise failed, etc.
	//return whether it passed.
	function test($a, $b) {
		//$success = $a == $b;
		if ($a == $b) {
		$this->alive = $this->alive + 1;
			return true;	
		} else {
			echo "There has been an enormous bomb on the train and SAY HELLO TO HEAVEN!<br> IF THERE IS ONE!";
			$this->dead = $this->dead + 1;
			return false;
		}
	}
}


<?php
class Train{
	public $alive = 0;
	public $dead = 0;
	//test takes two arguments, if they are equal, the test passed.
	//in that case, $this->passed += 1
	//otherwise failed, etc.
	//return whether it passed.
	function exploded($a, $b) {
		
		if ($a >= 50) {
		$this->alive = $this->alive + 1;
			return true;	
		} else {
			echo "There has been an enormous bomb on the train and SAY HELLO TO HEAVEN!<br> IF THERE IS ONE!";
			$this->dead = $this->dead + 1;
			return false;
		}
	}
}


class Train{
//define variables, speed and bomb
	public $speedometer = 0;
	public $bomb = 0;
	
		
//this returns the number of variable.
	function getSpeed(){
		return $this->speedometer;
		}
		

	function revItUp($x) {
		return $this->speedometer + 5;
		
		
	}
		function setSpeed(){
		$this->speedometer = 0;
		}
		function armed(){
		$this->currentSpeed = 0;
		}
		function armed(){
		$this->currentSpeed = 0;
		}
		function armed(){
		$this->currentSpeed = 0;
		}
		function armed(){
		$this->currentSpeed = 0;
		}
function setSpeed($speedometer, $) {
		if ($checkSpeed > 50) && $b >1{
					function armed();
					
					}
					else {return;}
				}
				
		$this->passed = $this->passed + 1;
			return true;	
		} else {
			echo "FAIL: expected $b, got $a<br> YOU IMBECILE!";//now you will get a big FAIL on screen with why.
			$this->failed = $this->failed + 1;
			return false;
			//keeping track of how many tests passed and how many tests failed. 1 and 0.
		}

	}

class 
class Tester {
//the model is your data.
//tester class is not a model, it doesnt represent data. it's a module. one takes a bunch
//of funtions and organizes them on the tester object. object is a class.
	public $passed = 0;
	public $failed = 0;
	//test takes two arguments, if they are equal, the test passed.
	//in that case, $this->passed += 1
	//otherwise failed, etc.
	//return whether it passed.
	function test($a, $b) {
		//$success = $a == $b;
		if ($a == $b) {
		$this->passed = $this->passed + 1;
			return true;	
		} else {
			echo "FAIL: expected $b, got $a<br> YOU IMBECILE!";//now you will get a big FAIL on screen with why.
			$this->failed = $this->failed + 1;
			return false;
			//keeping track of how many tests passed and how many tests failed. 1 and 0.
		}
	}
}
class Calculator {
	public $currentTotal = 0;
	function clear() {
		$this->currentTotal = 0;
		}
	//now add stuff
	function add($x) {
		//$this->currentTotal = $this->currentTotal + $x;
		$this->currentTotal += $x;
		}
	function sub($x){
		$this->currentTotal = $this->currentTotal - $x;
		//$this->currentTotal -= $x
		//$this - like $alice->sharkbite() 
	}
	function mult($x){
		
		$this->currentTotal *= $x;
	}
	function div($x){
		$this->currentTotal /= $x;
		}
	function eq() {
		return $this->currentTotal;
		
	}
	}
	//function eq($x){
	//	$this->currentTotal = this->currentTotal * $x;
	//}


//accessing property operators:
//Array ["property"]
//Array definition or loop, we assign them with the fat arrow, array=> for each $Array as
//$key=>$value) or ["key" => "value"]
//opject - ->= ex: $obj->prop;
//the skinny arrow goes with OBJECTS - i'm not sure if you ever have to use the => (fat arrow).
//we only worry about 1) $myarray["prop"], or $obj->prop.

?>