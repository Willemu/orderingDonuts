<?php if(!$_POST){ ?>

<form action="index.php"method="post">
     
    <label for="name">Username (required)</label>
    <input type="text"name="name">

    <label for="mobileNumber">Mobile number</label>
    <input type="text"name="mobileNumber">

    <input type="submit">

</form>

<?php } 
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
  echo "<p>Hello $userName what would you like to do next?</p>";

  }
   
}   