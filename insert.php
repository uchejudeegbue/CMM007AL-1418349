<?php

include("connect.php");



echo $firstname = $_POST['firstname'] . "<br>";
echo $lastname = $_POST['lastname'];

/*
if (empty($_POST['firstname'])||(empty($_POST['lastname']))){
    echo "Both fields are required";
}
    else{


        $sql = "INSERT INTO testing (firstname, lastname) VALUES ($fisrtname, $lastname)";

        if (mysqli_query($db,$sql)){
            header ("location: display.php?firstname=$firstname&lastname=$lastname");
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error ($db);
        }


    }

*/
?>