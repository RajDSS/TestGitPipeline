<?php

/* Include the MySQLi procedural-style connection script */
include 'connection.php';
$query = "SELECT * FROM User";
/* Execute the query */
$result = mysqli_query($conn, $query);

/* Check for errors */
if (!$result)
{
   echo 'Query error: ' . mysqli_error($conn);
   die();
}

/* Iterate through the result set */
while ($row = mysqli_fetch_assoc($result))
{
   echo 'User Name: ' . $row['user_name'] . ', Password: ' . $row['password'] . '<br>';
}

?>