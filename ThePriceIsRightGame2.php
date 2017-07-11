<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "stylesheet1.css"/>
<p id="announcement"> Electronics </p>
</head>
<body>
<div class="centerdiv">
<p> Console TV: <img src = "consoletv.jpg" alt = "consoletv.jpg"  /> </p>   
<form action = "ThePriceIsRightGame2.php" method = "post">
Player 1<input type = "text" name = "consoletva"/>
Player 2<input type = "text" name = "consoletvb"/>
<input type = "submit" name = "submit1" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Laserdisc: <img src = "laserdisc.jpg" alt = "laserdisc.jpg"  /> </p>   
<form action = "ThePriceIsRightGame2.php" method = "post">
Player 1<input type = "text" name = "laserdisca"/>
Player 2<input type = "text" name = "laserdiscb"/>
<input type = "submit" name = "submit2" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> VCR: <img src = "toploadingvcr.jpg" alt = "toploadingvcr.jpg"  /> </p>   
<form action = "ThePriceIsRightGame2.php" method = "post">
Player 1<input type = "text" name = "vcra"/>
Player 2<input type = "text" name = "vcrb"/>
<input type = "submit" name = "submit3" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Virtual Boy: <img src = "virtualboy.jpg" alt = "virtualboy.jpg"  /> </p>   
<form action = "ThePriceIsRightGame2.php" method = "post">
Player 1<input type = "text" name = "virtualboya"/>
Player 2<input type = "text" name = "virtualboyb"/>
<input type = "submit" name = "submit4" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Nintendo 64: <img src = "n64.jpg" alt = "n64.jpg"  /> </p>   
<form action = "ThePriceIsRightGame2.php" method = "post">
Player 1<input type = "text" name = "n64a"/>
Player 2<input type = "text" name = "n64b"/>
<input type = "submit" name = "submit5" value = "Enter"/>
</form>
</div>

<input type = "button" name = "Enter" value = "CARS" onclick = "window.location.href = 'ThePriceIsRightGame.php'" class="button2 prevpage"/>
<input type = "button" name = "Enter" value = "TOYS" onclick = "window.location.href = 'ThePriceIsRightGame3.php'" class="button2 nextpage"/>

<?php

$ConsoleTVPrice = 1000;
$LaserDiscPrice = 400;
$VCRPrice = 300;
$VirtualBoy = 500;
$N64Price = 250;
$player1points = 0;
$player2points = 0;
$ConsoleTVGuess = $_POST["consoletva"];
$ConsoleTVGuess2 = $_POST["consoletvb"];
$LaserDiscGuess = $_POST["laserdisca"];
$LaserDiscGuess2 = $_POST["laserdiscb"];
$VCRGuess = $_POST["vcra"];
$VCRGuess2 = $_POST["vcrb"];
$VirtualBoyGuess = $_POST["virtualboya"];
$VirtualBoyGuess2 = $_POST["virtualboyb"];
$N64Guess = $_POST["n64a"];
$N64Guess2 = $_POST["n64b"];
$Submit1Verify = $_POST["submit1"];
$Submit2Verify = $_POST["submit2"];
$Submit3verify = $_POST["submit3"];
$Submit4verify = $_POST["submit4"];
$Submit5verify = $_POST["submit5"];


function primaryfunction ()
{

if ((isset($Submit1Verify))) 
{

if ($ConsoleTVGuess <= $ConsoleTVPrice && $ConsoleTVGuess2 <= $ConsoleTVPrice)
	 {
	  
		 if ($ConsoleTVGuess > $ConsoleTVGuess2)
		 {
			 
			 $player1points++;
			 echo file_get_contents("Player1earnedapoint.txt");
		
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player2earnedapoint.txt");
		 }
		 
	 }
	 
}

if ((isset($Submit2Verify))) 
{

  if ($LaserDiscGuess <= $LaserDiscPrice && $LaserDiscGuess2 <= $LaserDiscPrice)
	 {
		 if ($LaserDiscGuess > $LaserDiscCougarGuess2)
		 {
			 
			 $player1points++; 
			 echo file_get_contents("Player1earnedapoint.txt");
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player2earnedapoint.txt");
		 }
	 }
	 
}

if ((isset($Submit3Verify))) 
{

 if ($VCRGuess <= $VCRPrice && $VCRGuess2 <= $VCRPrice)
	 {
		 if ($VCRGuess > $VCRGuess2)
		 {
			
			 $player1points++; 
			 echo file_get_contents("Player1earnedapoint.txt");
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player2earnedapoint.txt");
		 }
	 }
	 
}

if ((isset($Submit4Verify))) 
{

	 if ($VirtualBoyGuess <= $VirtualBoyPrice && $VirtualBoyGuess2 <= $VirtualBoyPrice)
	 {
		 if ($VirtualBoyGuess > $VirtualBoyGuess2)
		 {
			 
			 $player1points++;
			 echo file_get_contents("Player1earnedapoint.txt");
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player2earnedapoint.txt");
		 }
	 }
	 
}

if ((isset($Submit5Verify))) 
{

	 if ($N64Guess <= $N64Price && $N64Guess2 <= $N64Price)
	 {
		 if ($N64Guess > $N64Guess2)
		 {
			 
			 $player1points++; 
			 echo file_get_contents("Player1earnedapoint.txt");
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player2earnedapoint.txt");
		 }
	 }
}

	winningfunction();
	
}


	 
function winningfunction ()
{
	
	if ($player1points > $player2points )
	{
		echo file_get_contents("Player1winsround.txt");
	}
	
	else
	{
		echo file_get_contents("Player2winsround.txt");
	}
}



?>




</body>
</html>