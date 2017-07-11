<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "stylesheet1.css"/>
<p id="announcement"> TOYS </p>
</head>
<body>
<div class="centerdiv">
<p> GI Joe Deep Sea Diver: <img src = "GIJoeDeepSeaDiver.JPG" alt = "GIJoeDeepSeaDiver.jpg" id="toys" /> </p>   
<form action = "ThePriceIsRightGame3.php" method = "post">
Player 1<input type = "text" name = "gijoedeepseadivera"/>
Player 2<input type = "text" name = "gijoedeepseadiverb"/>
<input type = "submit" name = "submit1" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> GI Joe Desert Recon: <img src = "GIJoeDesertRecon.jpg" alt = "GIJoeDesertRecon.jpg" id="toys" /> </p>   
<form action = "ThePriceIsRightGame3.php" method = "post">
Player 1<input type = "text" name = "gijoedesertrecona"/>
Player 2<input type = "text" name = "gijoedesertreconb"/>
<input type = "submit" name = "submit2" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Goldberg: <br/><img src = "Goldberg.jpg" alt = "Goldberg.jpg" id="toys" /> </p>   
<form action = "ThePriceIsRightGame3.php" method = "post">
Player 1<input type = "text" name = "goldberga"/>
Player 2<input type = "text" name = "goldbergb"/>
<input type = "submit" name = "submit3" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Lego Lord of The Rings: <img src = "LegoLOTR.jpg" alt = "LegoLOTR.jpg"  /> </p>   
<form action = "ThePriceIsRightGame3.php" method = "post">
Player 1<input type = "text" name = "legolotra"/>
Player 2<input type = "text" name = "legolotrb"/>
<input type = "submit" name = "submit4" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> John Cena: <br/><img src = "johncena.jpg" alt = "johncena.jpg" id="toys"/> </p>   
<form action = "ThePriceIsRightGame3.php" method = "post">
Player 1<input type = "text" name = "johncenaa"/>
Player 2<input type = "text" name = "johncenab"/> 
<input type = "submit" name = "submit5" value = "Enter"/>
</form>
</div>
<input type = "button" name = "Enter" value = "CARS" onclick = "window.location.href = 'ThePriceIsRightGame.php'" class="button2 prevpage"/>
<input type = "button" name = "Enter" value = "ELECTRONICS" onclick = "window.location.href = 'ThePriceIsRightGame2.php'" class="button2 nextpage"/>

<?php

$GIJoeDeepSeaDiverPrice = 50;
$GIJoeDesertReconPrice = 30;
$GoldbergPrice = 20;
$LegoLOTRPrice = 100;
$JohnCenaPrice = 15;
$player1points = 0;
$player2points = 0;
$GIJoeDeepSeaDiverGuess = $_POST["gijoedeepseadivera"];
$GIJoeDeepSeaDiverGuess2 = $_POST["gijoedeepseadiverb"];
$GIJoeDesertReconGuess = $_POST["gijoedesertrecona"];
$GIJoeDesertReconGuess2 = $_POST["gijoedesertreconb"];
$GoldbergGuess = $_POST["goldberga"];
$GoldbergGuess2 = $_POST["goldbergb"];
$LegoLOTRGuess = $_POST["legolotra"];
$LegoLOTRGuess2 = $_POST["legolotrb"];
$JohnCenaGuess = $_POST["johncenaa"];
$JohnCenaGuess2 = $_POST["johncenab"];
$Submit1Verify = $_POST["submit1"];
$Submit2Verify = $_POST["submit2"];
$Submit3verify = $_POST["submit3"];
$Submit4verify = $_POST["submit4"];
$Submit5verify = $_POST["submit5"];


function primaryfunction ()
{

if ((isset($Submit1Verify))) 
{

if ($GIJoeDeepSeaDiverGuess <= $GIJoeDeepSeaDiverPrice && $GIJoeDeepSeaDiverGuess2 <= $GIJoeDeepSeaDiverPrice)
	 {
	  
		 if ($GIJoeDeepSeaDiverGuess > $GIJoeDeepSeaDiverGuess2)
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

  if ($GIJoeDesertReconGuess <= $GIJoeDesertReconPrice && $GIJoeDesertReconGuess2 <= $GIJoeDesertReconPrice)
	 {
		 if ($GIJoeDesertReconGuess > $GIJoeDesertReconGuess2)
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
	 
 if ($GoldbergGuess <= $GoldbergPrice && $GoldbergGuess2 <= $GoldbergPrice)
	 {
		 if ($GoldbergGuess > $GoldbergGuess2)
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

	 if ($LegoLOTRGuess <= $LegoLOTRPrice && $LegoLOTRGuess2 <= $LegoLOTRPrice)
	 {
		 if ($LegoLOTRGuess > $LegoLOTRGuess2)
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

	 if ($JohnCenaGuess <= $JohnCenaPrice && $JohnCenaGuess2 <= $JohnCenaPrice)
	 {
		 if ($JohnCenaGuess > $JohnCenaGuess2)
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