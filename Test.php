<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<head>
    <title>Test Page</title>
</head>
<body>

<h1> This is a simple login form</h1>

<p>Please provide the following information</p>

<form action="insert.php" method="post">

    <input type="text" name="firstname" placeholder="First Name"><br>
    <br>
    <input type="text" name="lastname" placeholder="Last Name"><br>
    <br>
    <input type="submit" value="submit">

</form>



</body>

</html>

<?php
echo "This is a test page.";
?>