<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  include_once('_connect.php');

  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $sql = "DELETE FROM supers WHERE id = {$_GET["id"]}";
  
  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  session_start();

  if($stmt->errorCode() !== "00000"){
    echo "There was an issue deleting the Hero.";
    var_dump($stmt->errorinfo());
  }else{
    echo "Delete successfully.";
  }


  header("Location: notification.php");
  exit;
  
  // TOTAL POINTS POSSIBLE: 38
?>