<!--- Christopher van Herwynen --->
<?php

//Connect to MySQL, my_db
$con = mysqli_connect("localhost", "Christopher", "Password1", "my_db");

//Check Connection to MySQL
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}   else{
    echo "You did connect to MySQL <br>";
}

// Escape Variables for security
$firstname = mysqli_real_escape_string($con, $_POST["FirstName"]);
$lastname = mysqli_real_escape_string($con, $_POST["LastName"]);
$age = mysqli_real_escape_string($con, $_POST["Age"]);

$sql = "INSERT INTO Persons (FirstName, LastName, Age)
VALUES ('$firstname', '$lastname', '$age')";

if (!mysqli_query($con,$sql)) {
    die("Error: " . mysqli_error($con));
}
echo "1 Record Added <br> $firstname $lastname; was added.";



mysqli_close($con);
?>