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
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="create.php" method="GET">
        <label for="name">Name<input type="text" name="name" placeholder="Enter your Name"></label><br>
        <label for="email">Email <input type="text" name="email" placeholder="Enter your Email"></label><br>
        <input type="submit" name="submit" value="Submit">
    </form>

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
            <td><a href="update.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
            <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
        </tr>

        <?php }} ?>
        </tbody>
    </table>
</body>

</html>