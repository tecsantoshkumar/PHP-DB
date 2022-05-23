# How to Fetch and Update Data From Database in PHP

Fetch and update the data from the MySQL database in PHP. This example demonstrates to you how you can easily fetch and update the data from the mysql database in PHP.

Here, we will show you simple and easy way on how to fetch and update data from mysql database in php.

*Connect to MySQL database

*Fetch data from the database

*Create data from database

*Update data from database

*Delete data from database

# 1. Connect to MySQL database

In this step, you will create a file name db.php and update the below code into your file.

The below code is used to create a MySQL database connection in PHP. When we fetch, insert, update or delete data from MySQL database, there we will include this file:
``` PHP
<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "db_connect") or die ("Connection Failed" . $conn->connect_error);
if ($conn) {
     echo "Connection Successfully";
}
 $conn->close();
?>
```
# 2. Fetch data from the databasee
```
<?php
require_once('db.php');

$sql = "SELECT `id`, `name`, `email` FROM `table`";
$result = $conn->query($sql);
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DATABASE</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="topnav">
        <a class="active" href="#">PHP DATABASE</a>
        <div class="search-container">
            <form action="/action_page.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
<div class="div">
        <form action="create.php" method="GET">
            <label for="fname">Name</label>
            <input class="input" type="text" id="name" name="name" placeholder="Your name..">

            <label for="lname">Email</label>
            <input class="input" type="text" id="email" name="email" placeholder="Your  email..">
            <input class="input" type="submit" name="submit" value="Save">
        </form>
    </div>

    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>name</th>
            <th>Email</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody id="data-Table">
        <?php 
        if (mysqli_num_rows($result)>0) {
          
        while($row = $result->fetch_assoc()) { ?>

        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><a href="update.php?id=<?php echo $row["id"]; ?>"><i class='fa fa-edit'  style='font-size:28px;color:blue'></i></a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>"><i class='material-icons' style='font-size:28px;color:red'>delete</i></a></td>
        </tr>

        <?php }} ?>
        </tbody>
    </table>
</body>

</html>
```

# 3. Create data from database

```
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
```

# 4. Update data from database

```
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
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="div">
    <form action="#" method="POST">
        <label for="name">Name<input class="input" type="text" name="name" value="<?php echo $row["name"]; ?>"></label><br>
        <label for="email">Email <input class="input" type="text" name="email" value="<?php echo $row["email"]; ?>"></label><br>
        <input class="input" type="hidden" name="id" value="<?php echo $row["id"]; ?>"/>
        <input class="input" type="submit" name="edit" value="Update">
        <a href="index.php" class="btn btn-default">Cancel</a>
    </form>
    </div>
</body>
</html>
```

# 5. Delete data from database

```
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
```
[Github Tec Santosh Kumar](https://www.github.com/tecsantoshkumar "Github Tec Santosh Kumar")
