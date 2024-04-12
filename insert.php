<?php

require_once("db_connection.php");

$mysql_query_statement = "INSERT INTO students (name, mobile, email)
VALUES ('George', '551694209', 'George@gmail.com'),
('Vamexi', '599101010', 'vamo@gmail.com'),
('LeFlop', '577230900', 'LeFlop@gmail.com'),
('Revaz', '555555555', 'Reziko@gmail.com')
";

$result = $conn->query($mysql_query_statement);

if($result === TRUE) {
    echo "Records inserted successfully.";
} else {
    echo "Error". $conn->error; 
}
mysqli_close($conn);

?>
