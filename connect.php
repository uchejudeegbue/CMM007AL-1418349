<?php

define (DB_SERVER, 'ap-cdbr-azure-east-c.cloudapp.net');
define (DB_USERNAME, 'b0b6f99eaa8095');
define (DB_PASSWORD, 'b6c66275');
define (DB_DATABASE, 'CMM007ALDB-1418349');

$sql = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>