<!---  Christopher van Herwynen  --->

<?php
//Connecting to MySQL
$con=mysqli_connect("localhost","Christopher","Password1");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 

// Create database
$sql="CREATE DATABASE Topic13";
if (mysqli_query($con,$sql)) {
    echo "Database Topic13 created successfully";
} else{
    echo "Error creating database: " . mysqli_error($con);
    echo "<br>";
}

mysqli_close($con);

?>