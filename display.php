



<?php

include ("connect.php");

$sql_query = "SELECT * FROM testing";

$result = mysqli_query($db, $sql_query);

while ($row = $result->fetch_array()){
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    echo "My name is {$firstname} {$lastname}" . "<br>";
}




?>