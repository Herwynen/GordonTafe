<!--- Christopher van Herwynen --->
<?php

//Connect to MySQL Database = Topic13
$con=mysqli_connect("localhost", "Christopher", "Password1", "Topic13");

//Check Connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "Connection was established.<br>";
}

//Create Customer Table in Topic13 database    ---  Primary Key is PID (Personal ID), Firstname, Lastname and age are standard Data fields.
$sql="CREATE TABLE Customer (
    CustID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(CustID),
    FirstName VARCHAR(30),
    LastName VARCHAR(30),
    StreetAddress VARCHAR(30),
    City VARCHAR(30),
    State VARCHAR(10),
    Postcode VARCHAR(10))";

//Execute Query
if (mysqli_query($con,$sql)){
    echo "Table Customer; created sucessfully";
} else{
    echo "Error Creating Table: " . mysqli_error($con);
}

//Create Accounts Table in Topic13 database    ---  Primary Key is PID (Personal ID), Firstname, Lastname and age are standard Data fields.
$sql="CREATE TABLE Accounts (
    AccountID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(AccountID),
    CustID INT,
    ProductID INT,
    TotalCost FLOAT(10))";

//Execute Query
if (mysqli_query($con,$sql)){
    echo "Table Accounts; created sucessfully";
} else{
    echo "Error Creating Table: " . mysqli_error($con);
}

//Create Products Table in Topic13 database    ---  Primary Key is PID (Personal ID), Firstname, Lastname and age are standard Data fields.
$sql="CREATE TABLE Products (
    ProductID INT NOT NULL AUTO_INCREMENT,
    PRIMARY KEY(ProductID),
    PartName VARCHAR(30),
    Description VARCHAR(50),
    Specs VARCHAR (50),
    OnHand INT(4),
    Category VARCHAR(30),
    Warehouse VARCHAR(30),
    Price Float(10))";

//Execute Query
if (mysqli_query($con,$sql)){
    echo "Table Products; created sucessfully";
} else{
    echo "Error Creating Table: " . mysqli_error($con);
}


// Kill Connection to MySQL
mysqli_close($con);
?>