<?php
include('db.php');

$result = mysqli_query($conn,"SELECT * FROM `table` WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);

if (isset($_POST['edit'])) {
    print_r($_REQUEST);
    $sql = "UPDATE `table` SET `name` ='" . $_POST['name'] . "',  `email`='" . $_POST['email'] . "' WHERE id= '" . $_POST['id'] . "'";
  
    if (mysqli_query($conn, $sql)) {
     echo "New record Updated successfully";
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="#" method="POST">
        <label for="name">Name<input type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
        <label for="email">Email <input type="text" name="email" value="<?php echo $row["email"]; ?>"></label><br>
        <input type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
        <input type="submit" name="edit" value="Update">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </form>
</body>
</html>