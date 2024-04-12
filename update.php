<?php
require_once('db_connection.php');

$mysql_query_statement = 'UPDATE students SET name = "gigi", email = "gigi@gmail.com" WHERE id = 1';

if ($conn->query($mysql_query_statement) === TRUE) {
    echo "Record Updated Successfully";
} else {
    echo "ERROR!". $conn->error;
}
mysqli_close($conn);
?>