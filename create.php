<?php
include('db.php');

if (isset($_GET['submit'])) {
  $sql = "INSERT INTO `table` (`name`, `email`)VALUES ('" . $_GET['name'] . "', '" . $_GET['email'] . "')";

  if (mysqli_query($conn, $sql)) {
   echo "New record created successfully";
   ?>
   <Script>
    window.location = "index.php";
  </Script>
   <?php
  } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
