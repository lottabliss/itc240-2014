<?php
//include ('busclass.php');


//define variables, speed and bomb
$speedometer = 20;
$bomb = "";
$gap = 0;
$image = 'speed';
$funnyMessage = "";
$danger = 'no';
    if(isset($_POST["submit"]))
    {
        $speedometer = $_POST["speedometer"];
        if ($speedometer>=80){
            $bomb = 1;
            $image = 'hopper';
            $funnyMessage = "You have gotten over the gap";
            $gap = 1;
        }
        
        elseif ($speedometer>=50){
            $image = 'sandraheadache';
            $bomb = 1;
            $funnyMessage = "Your bomb is armed";
            $danger = 'yes';//how do I make that permanent?
        }
        
        else{
            echo "thanks for keeping the speed limit";
            $image = 'speed';
            $bomb = 'no';
            $gap = 'no';
        }
    }

         function revItUp($x) {//in a Speed game, add 5.
        return $this->speedometer + 5;  
    }
         
        // function explode($bomb) {
  //if this was found in $_POST
  
  //if (isset($_POST[$bomb])) {
    //exit early
  //  return $something;
 // }
  //if not found
 // return false;

         
?>
<!DOCTYPE html>
<html>
<head>
<title>The Bus</title>
<style>
   #left{
        float:left;
        width:48%;
    }
    #right{
        float:right;
        width:48%;
    }
    body {
        background:#skyblue;
    }
    p{
        background:white;
        color:#222;
    }
    img{
        max-width:300px;
        min-width:300px;
        
    }
 
    </style>
</head>
    <body>
 <div id="wrap">       

   <div id="left"><form method="POST" action="speed.php">   
        <input placeholder="enter speed of bus" name="speedometer"
        value="">
     
        <button name="submit">Submit</button>
    </form>
    <p>The Speedometer is set at <?php echo $speedometer;?>
    <br>
    There is <?php echo $bomb;?> armed bomb on the Bus.
    
    <br>
    The gap is the road has been crossed <?php echo $gap;?> times from your speed.
    <img src="<?php echo $image;?>.jpg">
    </div><!--end left-->
   
    <div id="right"><?php echo $funnyMessage;?> at <b><?php echo $speedometer;?></b> miles per hour</div>
    </div><!--end wrap-->    </body>
</html>
