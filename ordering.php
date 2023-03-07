<!DOCTYPE html>
<html>
<head>
	<title>Your Order</title>
	<link rel="stylesheet" type="text/css" href="/css.css">
</head>
<body class="ordersummary">

<?php 

// so if user enters all their info execute the following
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // declares user inputs 
  $userName = $_POST['name'];
  $mobileNumber = $_POST['mobileNumber'];
  $email = $_POST["email"];
  $donut = $_POST["donut"];
  $numdonuts = $_POST["numdonuts"];
  //adding the default price
  $default_pricedonuts = 4;
  $toppings = $_POST["toppings"];
  $numbarone = $_POST['1'];
  $numhundrethousands = $_POST["hundrethousands"];
  $numalmonds = $_POST["almonds"];
  $numsmaties = $_POST["smarties"];
  $pricebarone = 2.00;
  $pricehundrethousands = 2.00;
  $pricealmonds = 2.00;
  $pricesmaties = 2.00;
  $filling = $_POST["filling"];
  $numnone = $_POST["none"];
  $numcream = $_POST["cream"];
  $numappricot = $_POST["appricot"];
  $numstrawberry = $_POST["strawberry"];
  $pricenone = 0.00;
  $pricecream = 2.00;
  $priceappricot = 2.00;
  $pricestrawberry = 2.00;
  //calculation to get to the final price by starting with the base price per donut multiplied by the number of donuts
  $pricedonuts = $default_pricedonuts * $numdonuts;
  //calculating the price for the toppings
  $pricetoppings = ($numbarone4 * $pricebarone) + ($numhundrethousands * $pricehundrethousands);
  //calculating the price for the filling
  $pricefilling = $default_pricefilling * $numfilling;
  //calculate the total cost by then adding the 3 categories together as a simple sum
  $total = $pricedonuts + $pricetoppings + $pricefilling;
    }


// tell the system what to show on the check out page
  echo "<h1>Order Summary</h1>";
		echo "<p>Name: " . $userName . "</p>";
		echo "<p>Email: " . $email . "</p>";
		echo "<p>Phone: " . $mobileNumber . "</p>";
		echo "<p>Donuts: " . $donut . "</p>";
    echo "<p>Quantity: " . $numdonuts . "</p>";
    echo "<p>Price: " . $pricedonuts . "</p>";
		echo "<p>Toppings: " . $toppings . "</p>";
    echo "<p>Price for toppings: " . $pricetoppings . "</p>";
		echo "<p>Filling: " . $filling . "</p>";
    echo "<p>Price for filling: " . $pricefilling . "</p>";
    // out the price fortmat and number of decimals 
    echo "R" . number_format($total, 2);
    // out the message that includes the username and total owed
  echo "<p>Hello $userName , your order total is R $total, we will call you when it is ready!</p>";

  
   
 

	?>
</body>
</html>