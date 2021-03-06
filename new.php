<!-- Step 1: (2 points) Include your header here -->
<?php
    include_once('_index.php');
?>
<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<?php
    header("Location: insert.php");
?>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->
<body>
     <form action="<?=$_SERVER["PHP_SELF"]?>" method="post">
        <div>
            <label>ID: </label></br>
            <input type="text" name="id">
        </div>

        <div>
            <label>First Name: </label></br>
            <input type="text" name="first_name">
        </div>

        <div>
            <label>Last Name:</label></br>
            <input type="text" name="last_name">
        </div>

        <div>
            <label>Date of Birth:</label></br>
            <input type="text" name="date_of_birth">
        </div>

        <div>
            <label>Alias:</label></br>
            <input type="text" name="alias">
        </div>

        <div>
            <label>Active:</label></br>
            <input type="text" name="active">
        </div>
        
        <div>
            <label>Hero:</label></br>
            <input type="text" name="hero">
        </div>

        <button type="submit">Enter</button>
    </form>




<!-- Step 5: (2 points) Include your footer here -->
<?php include_once('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->