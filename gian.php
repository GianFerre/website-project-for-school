<?php
$dbhost="localhost";
$dbusername = "root";
$dbpass = "";
$dbname = "loginsystem";

$mysqli = new mysqli ($dbhost, $dbusername, $dbpass, $dbname);
$result = mysqli_query($mysqli, "SELECT * FROM users4 ORDER BY user_last");
echo "<table><tr>";
echo "<th>Lastname: </th>
	  <th>Firstname: </th>
	  <th>Middele Name: </th>
	  <th>Email: </th>";
	  
while ($row = mysqli_fetch_array($result))
{
	echo"<tr>";
    echo"<td>" .$row["user_last"]. "</td>";
	echo"<td>" .$row["user_first"]. "</td>";
	echo"<td>" .$row["user_middle"]. "</td>";
	echo"<td>" .$row["user_email"]. "</td>";
}
	echo"</table>"
?>