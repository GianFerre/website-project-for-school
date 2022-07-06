<html>
<head>
<title>Delete Records</title>
</head>
<body>
	<table border = 1 cellpadding = 1 cellspacing = 1>
		<tr>
			<th>Last</th>
			<th>First</th>
			<th>Middle</th>
			<th>Email</th>
			<th>Delete</th>
		</tr>
		<?php
			//Connect with mysql_affected
			$con = mysqli_connect('localhost', 'root', '');
			//Select Database
				mysqli_select_db($con, 'loginsystem');
			//Select Query
			$sql = "SELECT * FROM users7";

			//Execute the query
			$records = mysqli_query($con,$sql);

			while($row = mysqli_fetch_array($records))
			{
				echo "<tr>";
			    echo "<td>".$row["user_last"]. "</td>";
				echo "<td>".$row["user_first"]. "</td>";
				echo "<td>".$row["user_middle"]. "</td>";
				echo "<td>".$row["user_email"]. "</td>";
				echo "<td><a href=delete.php?user_last=".$row['user_last'].">Delete</a></td>";
			}
		?>
	</table>
</body>