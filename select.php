<?php
require_once('db_connection.php');

$mysql_query_statement = "SELECT * FROM students";

$result = $conn->query($mysql_query_statement);

while($user_data = mysqli_fetch_array($result)) {
    echo $user_data['name']. " ".$user_data['mobile']. " ".$user_data['email']. "<br>";
}

mysqli_close($conn);


?>