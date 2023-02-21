<!DOCTYPE html>
<html>
<head>
	<title>Cake Order System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

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
  $cake = $_POST["cake"];
	$size = $_POST["size"];
	$delivery = $_POST["delivery"];

  echo "<h1>Order Summary</h1>";
		echo "<p>Name: " . $name . "</p>";
		echo "<p>Email: " . $email . "</p>";
		echo "<p>Phone: " . $phone . "</p>";
		echo "<p>Cake: " . $cake . "</p>";
		echo "<p>Size: " . $size . "</p>";
		echo "<p>Delivery: " . $delivery . "</p>";  
  echo "<p>Hello $userName what would you like to do next?</p>";

  }
   
} 

	?>
</body>
</html>
