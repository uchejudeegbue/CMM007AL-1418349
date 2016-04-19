<?php

include("connect.php");

if (empty($_POST['firstname'])||(empty($_POST['lastname']))){

}
    else{
        echo "Both fields are required";
    }

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];

$sql = "INSERT INTO testing (firstname, lastname) VALUES ($fisrtname, $lastname)";

       if (mysqli_query($db,$sql)){
       echo "Successful";
       }
           else {
          echo "Error: " . $sql . "<br>" . mysqli_error ($db);
           }
?>