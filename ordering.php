<?php if(!$_POST){ ?>

<form action="index.php"method="post">
     
    <label for="name">First Name</label>
    <input type="text"name="name">

    <label for="lastName">Last Name</label>
    <input type="text"name="lastName">

    <input type="submit">

</form>

<?php } else {

  $firstName = $_POST['name'];
  $lastName = $_POST['lastName'];
  echo "<p>Hello $firstName $lastName what would you like to do next?</p>";
}

