<?php
include ('db.php');

// sql to delete a record
$sql = "DELETE FROM `table` WHERE id= '" . $_GET['id'] . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
  ?>
   <Script>
    window.location = "index.php";
  </Script>
   <?php
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>