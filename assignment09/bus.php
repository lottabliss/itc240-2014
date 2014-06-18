<?php
//include ('busclass.php');

Class Speedfun{
var $speedometer = '20';
var $bomb = 'off';
var $gap;
var $image;
var $funnyMessage;
var $danger;
    
    
    function Speedfun($speedometer,$bomb)
    {
        $this->speedometer = $speedometer;
        $this->bomb = $bomb;
    }
    
    function speed(){
        echo $this->speedometer;
        echo $this->bomb;
    }
}    
    $what = new Speedfun('one','twho');
    $what->speed();
     
    
    
    

         
