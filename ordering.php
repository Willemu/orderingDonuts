<!DOCTYPE html>
<html>
<head>
	<title>Your Order</title>
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
  $numdonuts = $_POST["numdonuts"];
  $default_pricedonuts = 4;
  $toppings = $_POST["toppings"];
  $numtoppings = $_POST["numtoppings"];
  $default_pricetoppings = 2;
	$filling = $_POST["filling"];
  $numfilling = $_POST["numfilling"];
  $default_pricefilling = 2;
  $pricedonuts = $default_pricedonuts * $numdonuts;
  $pricetoppings = $default_pricetoppings * $numtoppings;
  $pricefilling = $default_pricefilling * $numfilling;
  $total = $pricedonuts + $pricetoppings + $pricefilling;


  

  echo "<h1>Order Summary</h1>";
		echo "<p>Name: " . $userName . "</p>";
		echo "<p>Email: " . $email . "</p>";
		echo "<p>Phone: " . $mobileNumber . "</p>";
		echo "<p>Donuts: " . $donut . "</p>";
    echo "<p>Quantity: " . $numdonuts . "</p>";
    echo "<p>Price: " . $pricedonuts . "</p>";
		echo "<p>Toppings: " . $toppings . "</p>";
    echo "<p>Quantity: " . $numtoppings . "</p>";
    echo "<p>Price: " . $pricetoppings . "</p>";
		echo "<p>Filling: " . $filling . "</p>";
    echo "<p>Quantity: " . $numfilling . "</p>";
    echo "<p>Price: " . $pricefilling . "</p>"; 
    echo "R" . number_format($total, 2);
  echo "<p>Hello $userName , your order total is R $total, we will call you when it is ready!</p>";

  }
   
} 

	?>
</body>
</html>
