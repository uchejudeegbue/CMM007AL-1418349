<?php

include("connect.php");



$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


if (empty($firstname)||(empty($lastname))){
    echo "Both fields are required";
}
    else{


        $sql = "INSERT INTO testing (firstname, lastname) VALUES ('$fisrtname', '$lastname')";

        if (mysqli_query($db,$sql)){
            header ("location: display.php?firstname=$firstname&lastname=$lastname");
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error ($db);
        }


    }


?>