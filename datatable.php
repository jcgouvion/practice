<?php
$link =mysqli_connect("localhost", "root", "root", "demo");
if($link === false){
	die("Error" . mysqli_connect_error());
} else {
	echo "You are connected";
	}


$first_name = mysqli_real_escape_string($link, $_POST['first_name']);
$last_name = mysqli_real_escape_string($link, $_POST['last_name']);
$email_address = mysqli_real_escape_string($link, $_POST['email_address']);



$sql = "INSERT INTO `demo`(first_name, last_name, email_address) VALUES ('$first_name',  '$last_name', '$email_address')";

if(mysqli_query($link, $sql)){
	echo "Records added sucessfully";
} else {
	echo "ERROR: Could not be able to execute " .mysqli_error($link);
}
?>
