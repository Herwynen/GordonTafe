<!--- Christopher van Herwynen --->
<?php

//Connect to MySQL, my_db
$con = mysqli_connect("localhost", "Christopher", "Password1", "Topic13");

//Check Connection to MySQL
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: <br>" . mysqli_connect_error();
}   else{
    echo "You did connect to MySQL <br>";
}

$sql = "INSERT INTO Accounts (CustID, ProductID, TotalCost)
    VALUES ('10', '18', '100.00'),
           ('40', '2', '3.50'),
           ('11', '5', '50.00'),
           ('47', '21', '4.45'),
           ('33', '33', '34.45'),
           ('14', '20', '60.95'),
           ('41', '34', '34.45'),
           ('3', '37', '34.45'),
           ('1', '46', '1000.00'),
           ('19', '42', '1000.00'),
           ('25', '25', '340.54'),
           ('31', '31', '34.45'),
           ('50', '29', '120.56'),
           ('20', '38', '68.90'),
           ('27', '24', '600.40'),
           ('2', '30', '34.45'),
           ('44', '44', '500.00'),
           ('32', '6', '30.00'),
           ('7', '7', '50.00'),
           ('5', '5', '50.00'),
           ('17', '17', '180.45'),
           ('12', '23', '99.99'),
           ('30', '28', '200.84'),
           ('15', '29', '120.56'),
           ('49', '43', '3000.00'),
           ('45', '3', '7.00');";
    
    if (mysqli_query($con,$sql)){
        echo "Table Account Data Injected Successfully";
    } else{
        echo "Error Inserting Data To Table: " . mysqli_error($con);
    }

//Kill Connection

mysqli_close($con);
?>