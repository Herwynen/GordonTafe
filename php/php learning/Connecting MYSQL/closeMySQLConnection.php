<!--- Christopher van Herwynen  --->


<?php
$con=mysqli_connect("localhost","Christopher", "Password1");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}   else{
    echo "Whoops, I did connect to MySQL" ;
}

mysqli_close($con);
?>