<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "db_connect") or die ("Connection Failed" . $conn->connect_error);
if ($conn) {
    // echo "Connection Successfully";
}

// $conn->close();

?>