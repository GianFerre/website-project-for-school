
<!DOCTYPE html>
<html>
<head>
	<title>Customer Information Form</title>
	<style type="text/css">
		.bg {
		  background: url(bg3.jpg);
		  
		  background-size: contain;
		  background-size: cover;
		  
		}

		.text1 {
			color: white;
			font-size: 70px;
			margin: 0px;
			background-color: black;
			text-align: center;
			font-family: "Courier New", Courier, monospace
		}

		.text1 {
			color: white;
			font-size: 70px;
			margin: 0px;
			background-color: black;
			text-align: center;
			font-family: "Courier New", Courier, monospace
		}

		.text2 {
			color: white;
			font-size: 20px;
			
			margin: 5%;
			text-align: center;

		
			font-family: "Comic Sans MS", cursive, sans-serif
		}
		
	</style>
</head>
<body class="bg" background = "bg3.jpg">

<form action="includes/signup.inc.php" method="POST">
	<div class="text2">
		<h1 class="text1">Customer Information<h1>
		Customer Account No. <input type="text" name="custaccno" placeholder="Account number">
		<br>
		Lastname: <input type="text" name="last" placeholder="Lastname">
		<br>
		Firstname: <input type="text" name="first" placeholder="Firstname">
		<br>
		Middlename: <input type="text" name="middle" placeholder="Middlename">
		<br>
		Address 1: <input type="text" name="address1" placeholder="Address 1">
		<br>
		Address 2: <input type="text" name="address2" placeholder="Address 2">
		<br>
		Address 3: <input type="text" name="address3" placeholder="Address 3">
		<br>
		Contact no.: <input type="text" name="contact" placeholder="Contact">
		<br>
		Email: <input type="text" name="email" placeholder="Email">
		<br>
		Gender: <input type="text" name="gender" placeholder="Gender">
		<br>
		Birthday: <input type="text" name="birthday" placeholder="Birthday">
		<br>
		<button type="submit" name="submit">Sign up</button>
	</div>
</form>

</body>
</html>