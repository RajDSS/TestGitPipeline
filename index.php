<?php
/* Include the MySQLi procedural-style connection script */
include 'connection.php';
$query = "SELECT * FROM User";
/* Execute the query */
$stmt = $conn->query($query);


/* Iterate through the result set */
while ($row = $stmt->fetch()) {
    echo $row['user_name']."<br />\n";
}

?>