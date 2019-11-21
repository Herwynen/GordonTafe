<!--- Christopher van Herwynen  --->
<!--- Delete one record from your database using the delete command. --->

<?php

//Connect to MySQL, my_db
$con = mysqli_connect("localhost", "Christopher", "Password1", "my_db");

//Check Connection to MySQL
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}else{
    echo "Connection was established.<br>";
}

//Make a table with FirstName and LastName as table Headers
mysqli_query($con,"DELETE FROM Persons WHERE LastName='Smith'");
$result = mysqli_query($con,"SELECT FirstName, LastName, Age FROM Persons");
echo "<table border='1'>
<tr>
<th>FirstName</th>
<th>LastName</th>
<th>Age</th>
</tr>";

//Call up all names within the Persons table data and place in rows.
while($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "<td>" . $row['Age'] . "</td>";
    echo "</tr>";
    echo "<br>";
}
echo "</table>";

//Closes MySQL Connection
mysqli_close($con);
?>