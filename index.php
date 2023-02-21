 <doctype html>
 
 <html lang="en">
 
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta charset="UTF-8"/>    
	<link rel="stylesheet" type="text/css" href="/css.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	
        <title>Dropping Donuts</title>
		
</head>

	
<header class="heading">
		<p> Welcome to Dropping Donuts</p>
</header>
	
	
<body class="pagebody">
<h1>Order your Donuts</h1>
	<form action="ordering.php" method="post">
		<label for="name">Username</label>
		<input type="text" id="name" name="name" required>

		<label for="email">Email:</label>
		<input type="email" id="email" name="email" required>

		<label for="mobileNumber">Mobile Number:</label>
		<input type="tel" id="mobileNumber" name="mobileNumber" required>
		<br>
		<label for="donut">Choose your Donut:</label>
		<select id="donut" name="donut" required>
			<option value="chocolate">Chocolate</option>
			<option value="vanilla">Vanilla</option>
			<option value="strawberry">Strawberry</option>
		</select>
		<br>
		<label for="size">Choose the Size:</label>
		<input type="radio" id="small" name="size" value="Small" required>
		<label for="small">Small</label>
		<input type="radio" id="medium" name="size" value="Medium">
		<label for="medium">Medium</label>
		<input type="radio" id="large" name="size" value="Large">
		<label for="large">Large</label>
			<br>
			<br>
		<label for="delivery">Collection:</label>
		<input type="radio" id="yes" name="delivery" value="Yes" required>
		<label for="yes">Yes</label>
		<input type="radio" id="no" name="delivery" value="No">
		<label for="no">No</label>
			<br>
			<br>
		<input type="submit" value="Submit">
	</form>
			
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>	
       <script src="js/bootstrap.min.js"></Script>
	</body>

</html>