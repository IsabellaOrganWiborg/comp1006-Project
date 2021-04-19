<?php

  // Step 1: (12) Using either MySQLi or PDO
  //    Create a connection to your MySQL DB and store it in a variable named $conn
  // CREATE YOUR CONNECTION BELOW THE LINE

  

  // use PDO
  function connect() {
    $host = "localhosts";
    $user = "root";
    $password = " ";
    $db = "project01";
  
    try{
        $con = new PDO("mysql:host={$host};dbname={$db}", $user, $password, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

        return $con;
    } catch(PDOEXception $errors){
      if(session_status() === PHP_SESSION_NONE) session_start();
      $_SESSION['errors'][] = $errors->getMessage();
    }
  }
  
  // TOTAL POINTS POSSIBLE: 6

?>