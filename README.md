# How to Fetch and Update Data From Database in PHP

Fetch and update the data from the MySQL database in PHP. This example demonstrates to you how you can easily fetch and update the data from the mysql database in PHP.

Here, we will show you simple and easy way on how to fetch and update data from mysql database in php.

.Connect to MySQL database

.Fetch data from the database

.Create data from database

.Update data from database

.Delete data from database

# 1. Connect to MySQL database

In this step, you will create a file name db.php and update the below code into your file.

The below code is used to create a MySQL database connection in PHP. When we fetch, insert, update or delete data from MySQL database, there we will include this file:

<?php

$conn = mysqli_connect("127.0.0.1", "root", "", "db_connect") or die ("Connection Failed" . $conn->connect_error);

if ($conn) {

     echo "Connection Successfully";

}

 $conn->close();

?>
# 2. Fetch data from the databasee

# 3. Create data from database

# 4. Update data from database

# 5. Delete data from database
