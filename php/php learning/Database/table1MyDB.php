<!--Christopher van Herwynen    --->

<?php

//Connect to MySQL, my_db
$con = mysqli_connect("localhost", "Christopher", "Password1", "my_db");

//Check Connection to MySQL
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "Connection was established.<br>";
}

//Call up names 
$result = mysqli_query($con,"SELECT FirstName, LastName FROM Persons");

while($row = mysqli_fetch_array($result)){
    echo $row['FirstName'] . " " . $row['LastName'];
    echo "<br>";
}
//Closes MySQL Connection
mysqli_close($con);
?>