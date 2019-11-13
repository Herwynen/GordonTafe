<!--- Christopher van Herwynen - 12127341 --->
<?php
$servername = "localhost";
$username = "Christopher";
$password = "Password1";


//Create Connection
$con = mysqli_connect("localhost", "Christopher", "Password1");

//Check Connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} else{
        echo "Connected to test.";
}
// Kills MySQL connection - Kill at end of every php!!!!!!!!
mysqli_close($con);


?>