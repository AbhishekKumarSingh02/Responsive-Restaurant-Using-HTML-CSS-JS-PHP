<?php

$DB_HOST= "localhost";
$DB_USER="root";
$DB_PASSWORD = "";
$DB_DATABASE= "testt";



$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_DATABASE);

	$fname = $_POST['firstName'];
	$lname = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$pass = $_POST['password'];
	$number = $_POST['number1'];


$sql = "INSERT into registration (firstName, lastName, gender, email, password, number1) VALUES('" . $fname . "','" . $lname . "','" . $gender . "','" . $email . "','" . $pass . "','" . $number . "')";


$success = $mysqli->query($sql);


if (!$success) {
    die("Couldn't enter data: ".$mysqli->error);
}


echo "entered";


$mysqli->close();

?>