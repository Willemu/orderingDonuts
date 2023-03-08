<doctype html>
 
 <html lang="en">
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8"/>    
	<link rel="stylesheet" type="text/css" href="/css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
        <title>Dropping Donuts</title>
		
</head>

<!-- Created and added a logo for the donut shop-->	
<header class="heading">
		<p> Welcome to Dropping Donuts</p>
		<img src="images/logo.png" alt="Logo" width="200" height="200" class="logo">
</header>
	
<!-- using html created the input form where the user will add their info and select their dounuts-->		
<body class="pagebody">
<h1>Order your Donuts</h1>
<!-- link the ordering.php to the html so that the system know what to output. Using the post method-->!
	<form action="ordering.php" method="post">
		<label for="name">Username</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="mobileNumber">Mobile Number:</label>
		<input type="tel" id="mobileNumber" name="mobileNumber" required>
		<br>
		<label for="donut">Choose your Donut:</label>
		<p>The standard price for the plain donut is R4, for any other glazing add R2</p>
		<select id="donut" name="donut" required>
		    <option value="plain">Plain</option>
			<option value="chocolate">Chocolate</option>
			<option value="vanilla">Vanilla</option>
            
		</select>

			<label for="numdonuts">Quantity:</label>
            <input type="text" name="numdonuts" id="numdonuts" required>
			

		<label for="toppings">Choose your Toppings:</label>

		<p>The standard price for each topping is R2, a maximum of 3 toppings per donut</p>
		
		<input type="checkbox" id="barone" name="toppings" value="2">
		<label for="barone">BarOne</label>

		<input type="checkbox" id="hundrethousands" name="toppings" value="2">
		<label for="hundrethousands">Hundrethousands</label>

		<input type="checkbox" id="almonds" name="toppings" value="almonds">
		<label for="almonds">Almonds</label>

		<input type="checkbox" id="smarties" name="toppings" value="smarties">
		<label for="smarties">Smarties</label>

		<br>

		<label for="numtoppings">Quantity:</label>
        <input type="text" name="numtoppings" id="numtoppings" required>
		
		<br>
			
		<label for="filling">Select your filling:</label>

		<p>The standard price for a filling is R2, a maximum of 1 filling per donut</p>
		
		<input type="checkbox" id="none" name="filling" value="none">
		<label for="none">None</label>
		<input type="checkbox" id="cream" name="filling" value="cream">
		<label for="cream">Cream</label>
		<input type="checkbox" id="appricot" name="filling" value="appricot">
		<label for="appricot">Appricot</label>
		<input type="checkbox" id="strawberry" name="filling" value="strawberry">
		<label for="strawberry">Strawberry</label>

		<br>

		<label for="numfilling">Quantity:</label>
        <input type="text" name="numfilling" id="numfilling" required>
		

		

			<br>
			<br>
		<input type="submit" value="Submit">

		<img src="images/chocolatedonut.png" alt="chocolate donut" width="200" height="200" class="donutpic1">
		<br>
	</form>
			
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>	
       <script src="js/bootstrap.min.js"></Script>
	</body>

</html>