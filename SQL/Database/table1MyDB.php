<!--Christopher van Herwynen    --->

<?php

//Connect to MySQL, my_db
$con = mysqli_connect("localhost", "Christopher", "Password1", "my_db");

//Check Connection to MySQL
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}   else{
    echo "Connection was not established.<br>";
}

//Call up names from Persons table in a Border Table.
// $sql = "SELECT FirstName, LastName FROM Persons ORDER BY PID DESC";
$result = mysqli_query($con,"SELECT FirstName, LastName FROM Persons");

echo ("<table border='1'>
        <tr>
            <th>FirstName</th>
            <th>LastName</th>
        </tr>");

while ($row = mysqli_fetch_array($result)){
    echo "<tr>";
    echo "<td>" . $row['FirstName'] . "</td>";
    echo "<td>" . $row['LastName'] . "</td>";
    echo "</tr>";
}

        echo "</table>";

mysqli_close($con);
?>
