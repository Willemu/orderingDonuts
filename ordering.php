<!DOCTYPE html>
<html>
<head>
	<title>Cake Order System</title>
	<link rel="stylesheet" type="text/css" href="/css.css">
</head>
<body class="ordersummary">

<?php 
// if user does not enter username execute the following

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "A username is a required field";
    echo "<p>Hello, please enter your username. $nameErr</p>";
  }


// so if user enters all their info execute the following
  else {

  
  $userName = $_POST['name'];
  $mobileNumber = $_POST['mobileNumber'];
  $email = $_POST["email"];
  $donut = $_POST["donut"];
	$toppings = $_POST["toppings"];
	$filling = $_POST["filling"];

  echo "<h1>Order Summary</h1>";
		echo "<p>Name: " . $userName . "</p>";
		echo "<p>Email: " . $email . "</p>";
		echo "<p>Phone: " . $mobileNumber . "</p>";
		echo "<p>Donuts: " . $donut . "</p>";
		echo "<p>Toppings: " . $toppings . "</p>";
		echo "<p>Filling: " . $filling . "</p>";  
  echo "<p>Hello $userName , your order is on it's way, we will call you when it is ready!</p>";

  }
   
} 

	?>
</body>
</html>
