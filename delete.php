<?php
	//Connect with mysql_affected
	$con = mysqli_connect('localhost', 'root', '');
	//Select Database
		mysqli_select_db($con, 'loginsystem');
	//Select Query
	$sql = "DELETE FROM users7 WHERE user_last='$_GET[user_last]'";

	//Execute the query
	if(mysqli_query($con,$sql))
		header("refresh:1; url=idelete.php");
	else
		echo "Not Deteled";
?>