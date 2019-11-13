<!--- Christopher van Herwynen --->
<?php

//Connect to MySQL Database = my_db
$con=mysqli_connect("localhost", "Christopher", "Password1", "my_db");

//Check Connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//Create table in my_db database    ---  Primary Key is PID (Personal ID), Firstname, Lastname and age are standard Data fields.
$sql="CREATE TABLE Persons(
    PID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(PID),
    FirstName CHAR(30),
    LastName CHAR(30),
    Age INT)";

//Execute Query
if (mysqli_query($con,$sql)){
    echo "Table Persons; created sucessfully";
} else{
    echo "Error Creating Table: " . mysqli_error($con);
}



// Kill Connection to MySQL
mysqli_close($con);
?>