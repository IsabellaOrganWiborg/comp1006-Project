<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  include('_connect.php');

  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $sql = "SELECT * FROM supers WHERE id = {$_GET["id"]}";

?>

<!-- Step 3: (2 points) Include your header here -->

<!DOCTYPE html>
<html lang="en" class="home">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src='https://www.google.com/recaptcha/api.js' async defer ></script>
    <link rel="stylesheet" href="styles.css">

    <title>SuperHeros</title>
  </header>
<body class="main">

<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<?php
  include_once("Location: index.php");
?>

<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<body>
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $_GET["id"]?>">

    <div>
        <label>First Name:</label><br>
        <input type="text" name="first_name" value="<?= "first_name"?>">
    </div>

    <div>
        <label>Last Name:</label><br>
        <input type="text" name="last_name" value="<?= "last_name"?>">
    </div>

    <div>
        <label>Date of Birth:</label><br>
        <input type="text" name="date_of_birth" value="<?= "date_of_birth"?>">
    </div>

    <div>
        <label>Alias:</label><br>
        <input type="text" name="alias" value="<?= "alias"?>">
    </div>

    <div>
        <label>Active:</label><br>
        <input type="textS" name="active" value="<?= "active"?>">
    </div>

    <div>
        <label>Hero:</label><br>
        <input type="text" name="hero" value="<?= "hero"?>">
    </div>

    <button class="btn btn-primary" type="submit">Enter</button>
  </form>
</body>

<!-- Step 8: (2 points) Include your footer here -->
<?php

  include(" _footer.php");
  
?>

<!-- TOTAL POINTS POSSIBLE: 44 -->