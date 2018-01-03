<?php
include "protected/config.php";
include "model/film.class.php";
function login($username, $password) {	

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(mysqli_connect_error()) {
		echo "Error connecting to database: " . mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM users WHERE username = '$username'";
	$result = mysqli_query($con, $sql);	
	if(!$result) {
		return false;
	}
	$row = $result->fetch_assoc();

	if(password_verify($password, $row["password_hash"])) {
		return $row;
	} else {
		return false;
	}
}


?>