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

 // declares user inputs 
  $userName = $_POST['name'];
  $mobileNumber = $_POST['mobileNumber'];
  $email = $_POST["email"];
  $donut = $_POST["donut"];
  $numdonuts = $_POST["numdonuts"];
  //adding the default price
  $default_pricedonuts = 4;
  $toppings = $_POST["toppings"];
  $numtoppings = $_POST["numtoppings"];
  //adding the default price
  $default_pricetoppings = 2;
	$filling = $_POST["filling"];
  $numfilling = $_POST["numfilling"];
  //adding the default price
  $default_pricefilling = 2;
  //calculation to get to the final price by starting with the base price per donut multiplied by the number of donuts
  $pricedonuts = $default_pricedonuts * $numdonuts;
  //calculating the price for the toppings
  $pricetoppings = $default_pricetoppings * $numtoppings;
  //calculating the price for the filling
  $pricefilling = $default_pricefilling * $numfilling;
  //then adding the 3 categories together as a simple sum
  $total = $pricedonuts + $pricetoppings + $pricefilling;


  
// tell the system what to show on the check out page
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
    // out the price fortmat and number of decimals 
    echo "R" . number_format($total, 2);
    // out the message that includes the username and total owed
  echo "<p>Hello $userName , your order total is R $total, we will call you when it is ready!</p>";

  }
   
} 

	?>
</body>
</html>
