<?php

	include_once 'dbh.inc.php';

	$custaccno = $_POST['custaccno'];
	$last = $_POST['last'];
	$first = $_POST['first'];
	$middle = $_POST['middle'];
	$address1 = $_POST['address1'];
	$address2 = $_POST['address2'];
	$address3 = $_POST['address3'];
	$contact = $_POST['contact'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$birthday = $_POST['birthday'];

	$sql = "INSERT INTO users4 (user_custaccno, user_last, user_first, user_middle, user_address1, user_address2, user_address3, user_contact, user_email, user_gender, user_birthday) VALUES ('$custaccno' , '$last', '$first', '$middle', '$address1', '$address2', '$address3', '$contact', '$email', '$gender', '$birthday');";
	mysqli_query($conn, $sql);

	//header("Location: ../index.php?signup=success");


	if ($conn->query($sql)) {
		echo "The data has been succesfully added <3";
	}