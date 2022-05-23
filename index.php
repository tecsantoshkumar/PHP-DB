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
