//make class, which doesn't work. pity.

class Tester {
    public $passed = 0;
    public $failed = 0;        
//this returns the number of variable.
    function getSpeed(){
        return $this->speedometer;
        }
        function setSpeed(){
        $this->speedometer = 0;
        }
        
    
     function slowingDown($x){//in a Speed game, take away 5.
         $this->speedometer -= 5;
     }
         function revItUp($x) {//in a Speed game, add 5.
        return $this->speedometer + 5;  
    }
    function exploded($speedometer, $bomb) {//later I'll show $amountofspeed,$if0or1isbomb
        //$success = $a == $b;
        if ($speedometer>50 && $bomb<1) {//bus over 50 and bus unarmed (0)
        $this->passed = $this->passed + 1;
            return true;    
        } 
        else if ($speedometer>50 && $bomb<1) { //bus under 50 but bus unarmed 
        $this->passed = $this->passed +1;
            return true;
        }
        else {
            echo "FAIL: $speedometer under 50 and the bus had $bomb bombs armed. <br> YOU IMBECILE!";
            $this->failed = $this->failed + 1;
            return false;
            //keeping track of how many tests passed and how many tests failed. 1 and 0.
        }
            function trigger(){
            exploded(1,0);
        }
        
    }
}
?>