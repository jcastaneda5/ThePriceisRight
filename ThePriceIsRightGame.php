<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" type = "text/css" href = "stylesheet1.css"/>
<h1> Enter your guess for the price of each vehicle </h1>
</head>
<body>
<p id="announcement"> CARS </p>
<div class="centerdiv">
<p> Monte Carlo SS: <img src = "montecarloSS.jpg" alt = "montecarloSS.jpg"  /> </p>   
<form action = "ThePriceIsRightGame.php" method = "post">
Player 1<input type = "text" name = "item1a"/>
Player 2<input type = "text" name = "item1b"/>
<input type = "submit" name = "submit1" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Mercury Cougar: <img src = "mercurycougar.jpg" alt = "mercurycougar.jpg"  /> </p>
<form action = "ThePriceIsRightGame.php" method = "post">
Player 1<input type = "text" name = "item2a"/>
Player 2<input type = "text" name = "item2b"/>
<input type = "submit" name = "submit2" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Mustang: <img src = "fordmustang.jpg" alt = "fordmustang.jpg"  /> </p>
<form action = "ThePriceIsRightGame.php" method = "post">
Player 1<input type = "text" name = "itema3"/>
Player 2<input type = "text" name = "itemb3"/>
<input type = "submit" name = "submit3" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Delorean: <img src = "delorean.jpg" alt = "delorean.jpg"  /> </p>
<form action = "ThePriceIsRightGame.php" method = "post">
Player 1<input type = "text" name = "item4a"/>
Player 2<input type = "text" name = "item4b"/>
<input type = "submit" name = "submit4" value = "Enter"/>
</form>
</div>
<div class="centerdiv">
<p> Chevelle: <img src = "1970chevelle.jpg" alt = "1970chevelle.jpg"  /> </p>
<form action = "ThePriceIsRightGame.php" method = "post">
Player 1<input type = "text" name = "item5a"/>
Player 2<input type = "text" name = "item5b"/>
<input type = "submit" name = "submit5" value = "Enter"/>
</form>
</div>
<input type = "button" name = "Enter" value = "ELECTRONICS" onclick = "window.location.href = 'ThePriceIsRightGame2.php'" class="button2 prevpage"/>
<input type = "button" name = "Enter" value = "TOYS" onclick = "window.location.href = 'ThePriceIsRightGame3.php'" class="button2 nextpage"/>

<?php

$MonteCarloPrice = 22000;
$MercuryCougarPrice = 18000;
$FordMustangPrice = 25000;
$DeloreanPrice = 45000;
$ChevellePrice = 28000;
$player1points = 0;
$player2points = 0;
$MonteCarloGuess = $_POST["item1a"];
$MonteCarloGuess2 = $_POST["item1b"];
$MercuryCougarGuess = $_POST["item2a"];
$MercuryCougarGuess2 = $_POST["item2b"];
$FordMustangGuess = $_POST["item3a"];
$FordMustangGuess2 = $_POST["item3b"];
$DeloreanGuess = $_POST["item4a"];
$DeloreanGuess2 = $_POST["item4b"];
$ChevelleGuess = $_POST["item5a"];
$ChevelleGuess2 = $_POST["item5b"];
$Submit1Verify = $_POST["submit1"];
$Submit2Verify = $_POST["submit2"];
$Submit3verify = $_POST["submit3"];
$Submit4verify = $_POST["submit4"];
$Submit5verify = $_POST["submit5"];


function primaryfunction ()
{
  if ((isset($Submit1Verify))) 
{

if ($MonteCarloGuess <= $MonteCarloPrice && $MonteCarloGuess2 <= $MonteCarloPrice)
	 {
	  
		 if ($MonteCarloGuess > $MonteCarloGuess2)
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
  if ($MercuryCougarGuess <= $MercuryCougarPrice && $MercuryCougarGuess2 <= $MercuryCougarPrice)
	 {
		 if ($MercuryCougarGuess > $MercuryCougarGuess2)
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
 if ($FordMustangGuess <= $FordMustangPrice && $FordMustangGuess2 <= $FordMustangPrice)
	 {
		 if ($FordMustangGuess > $FordMustangGuess2)
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

	 if ($DeloreanGuess <= $DeloreanPrice && $DeloreanGuess2 <= $DeloreanPrice)
	 {
		 if ($DeloreanGuess > $DeloreanGuess2)
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

	 if ($ChevelleGuess <= $ChevellePrice && $ChevelleGuess2 <= $ChevellePrice)
	 {
		 if ($ChevelleGuess > $ChevelleGuess2)
		 {
			 
			 $player1points++; 
			 echo file_get_contents("Player1earnedapoint.txt");
		 }
		 else 
		 {
			 
			 $player2points++;
			 echo file_get_contents("Player1earnedapoint.txt");
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