<?php
	$firstName = $_POST["firstName"];
	$lastName = $_POST["lastName"];
	$middleName = $_POST["middleName"];
	$emailAddress = $_POST["emailAddress"];
	$accno = $_POST["accno"];
	
	echo "Name: " . $firstName . " " . $middleName . " " . $lastName;
	echo "<br>";
	echo "Email Address: " . $emailAddress;
	echo "<br>";
	echo "Account number: " . $accno;
?>