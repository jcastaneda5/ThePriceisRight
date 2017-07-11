<!DOCTYPE html>
<html>
<head>
<title>
    PRICE IS RIGHT PHP GAME!!!!
</title>
<link rel = "stylesheet" type = "text/css" href = "stylesheet1.css"/>
<div id="Title">
<h1 id="fontorange">The <span id ="fontyellow">Price</span> is Right </h1>
</div>
</head>

<body>
<p id="announcement"> CHOOSE A CATEGORY TO GUESS THE PRICE!</p>
<div class="center">
<input type = "button" name = "Enter" value = "CARS" onclick = "window.location.href = 'ThePriceIsRightGame.php'" class="button1"/>
<input type = "button" name = "Enter" value = "ELECTRONICS" onclick = "window.location.href = 'ThePriceIsRightGame2.php'" class="button1"/>
<input type = "button" name = "Enter" value = "TOYS" onclick = "window.location.href = 'ThePriceIsRightGame3.php'" class="button1"/>
<?php
$player1Err = $player2Err = "";

 if($_SERVER["REQUEST_METHOD"] == "POST"){
	 if (empty($_POST["player1"])){
		 $player1Err = "Name is required";
	 }
	 
	 if($_SERVER["REQUEST_METHOD"] == "POST"){
		 if (empty($_POST["player2"])){
			 $player2Err = "Name is required";
		 }
	 }
 }
?>

</div>
</body>
</html>