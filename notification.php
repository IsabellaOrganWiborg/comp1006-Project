<?php

  // Step 1: (1 point) Start your session
  // CREATE YOUR SESSION START BELOW THIS LINE

  session_start();

  // Step 2: (4) Redirect the user if they don't have a notification
  // CREATE YOUR REDIRECT LOGIC BELOW THIS LINE

  if (!isset($_SESSION["notification"])) {
    header("Location: index.php");
    exit;
  }

  // Step 3: (5) Output the notification and clear it from the session (once it's outputted)
  // CREATE YOUR NOTIFICATION OUTPUT AND CLEAR BELOW THIS LINE
?>
  <body> 
  <?php if (isset($_SESSION["notification"]["success"])): ?>
      <h2>SUCCESS:</h2>
      <p style="color: green"><?= $_SESSION["notification"]["success"] ?></p>
    <?php elseif (isset($_SESSION["notification"]["error"])): ?>
      <h2>ERROR:</h2>
      <p style="color: red"><?= $_SESSION["notification"]["error"] ?></p>
    <?php endif ?>
  </body>

<?php 
  session_unset();
  // TOTAL POINTS POSSIBLE: 10
?>

