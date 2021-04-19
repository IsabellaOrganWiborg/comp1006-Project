<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE

  require_once('_connect.php');

  // Step 2: (17 points) Insert the new 'supers' row into the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

  $conn = connect();
  $sql = "INSERT INTO supers (
    id
    first_name,
    last_name,
    date_of_birth,
    alias,
    active,
    hero
  ) VALUES (
    '1_POST['id']}',
    '{$_POST['first_name']}',
    '{$_POST['last_name']}',
    '{$_POST['date_of_birth']}',
    '{$_POST['alias']}',
    '{$_POST['active']}',
    '{$_POST['hero']}'
  )";

  $stmt = $con->prepare($sql);

  $stmt->binParam('id', $_POST, PDO::PARAM_STR);
  $stmt->binParam('first_name', $_POST, PDO::PARAM_STR);
  $stmt->binParam('last_name', $_POST, PDO::PARAM_STR);
  $stmt->binParam('date_of_birth', $_POST, PDO::PARAM_STR);
  $stmt->binParam('alias', $_POST, PDO::PARAM_STR);
  $stmt->binParam('active', $_POST, PDO::PARAM_STR);
  $stmt->binParam('hero', $_POST, PDO::PARAM_STR);

  $stmt->execute();
 

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE

  
  $error = [];

  $id = filter_input(INPUT_POST, 'id');
  $first_name = filter_input(INPUT_POST, 'first_name');
  $last_name = filter_input(INPUT_POST, 'last_name');
  $date_of_birth = filter_input(INPUT_POST, 'date_of_birth');
  $alias = filter_input(INPUT_POST, 'alias');
  $active = filter_input(INPUT_POST, 'active');
  $hero = filter_input(INPUT_POST, 'hero');

  //Required Fields
  $required_fields = [
    'id',
    'first_name',
    'last_name',
    'date_of_birth',
    'alias',
    'active',
    'hero'
  ];

  foreach($required_fields as $field){
    if(empty($_POST[$field])){ 
     echo "<br>The {$_POST[$field]} cannot be empty";
     exit;
    }
  }
 
 if(!filter_var($_POST['id'], FILTER_VALIDATE_EMAIL)){
     echo "<br> The email isn't in a valid format. Please correct it. <br>";
     exit;
  }

 //Sanitization
  foreach($required_fields as $field){
    $_POST[$field] = filter_var($_POST[$field], FILTER_SANITIZE_STRING);
  }
    $_POST['email'] = filter_var($_POST['id'], FILTER_SANITIZE_STRING);
  var_dump($_POST);

  //Normalization
  foreach($required_fields as $field){
    if($field === 'id') continue;

    $_POST[$field] = strtolower($_POST[$field]);
    $_POST[$field] = ucwords($_POST[$field]);

  }
  var_dump($_POST);

  
  if($stmt->errorCode() !== "00000"){
      echo "There was an issue insterting Hero.";
      var_dump($stmt->errorinfo());
  }else{
      echo "Hero Inserted successfully.";
  }
  

  //Redirect 
  header("Location: index.php");
  exit();
  



  // TOTAL POINTS POSSIBLE: 35
?>