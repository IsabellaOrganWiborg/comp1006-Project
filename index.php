<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');

  // Step 2: (5 points) Retrieve all the 'supers' rows from your database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE

     
?>

<!-- Step 3: (2 points) Include your header here -->
<?php
    include_once('_header.php');
?>
<!-- Step 4: (2 points) Create a navigation bar for home.php and new.php -->
<!-- CREATE YOUR NAVIGATION HTML BELOW THIS LINE -->
  <header>
    <nav>
      <ul class="nav">
        <li>
          <!-- HOME LINK -->
          <a href="index.php">HOME</a>
        </li>
        <li>
          <!-- NEW LINK -->
          <a href="new.php">NEW HERO</a>
         </li>
      </ul>
    </nav>
  </header>

<!-- Step 5: (15 points) Create a table that display each row from the database -->
<!-- You only need to display the first_name, last_name, date_of_birth, -->
<!-- alias, active, and hero columns -->
   
<!-- Step 6: (6 points) Create action links pointing to 'edit.php' and 'delete.php' -->
<!-- Ensure there was one edit and delete link for each row -->

<!-- CREATE YOUR TABLE BELOW THIS LINE -->
<section class="table">
    <table>
      <thead>
        <tr>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Date of Birth</th>
          <th>Alias</th>
          <th>Active</th>
          <th>Hero</th>
          <td>
            <a href="edit.php">Edit</a>
            |
            <a href="delete.php" onClick="return confirm('Are you sure?')">Delete</a>
          </td>
        </tr>
      </thead>
    </table>
  </section>


<!-- Step 7: (2 points) Include your footer here -->

<?php include_once('_footer.php') ?>

<!-- TOTAL POINTS POSSIBLE: 34 -->