<?php
include "protected/config.php";
function get_all_films() {	

	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(mysqli_connect_error()) {
		echo "Error connecting to database: " . mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM films";
	$films = [];
	$result = mysqli_query($con, $sql);
	
	while($row = $result->fetch_assoc()) {
		$films[] = array("id" => $row["id"], "name" => $row["name"], "description" => $row["description"], "rating" => $row["rating"], "year" => $row["year"]);
	}
	return $films;
}

function get_film_by_name($name) {
	
	// TODO: Get film from database
	global $films;	
	$found_film = [];
	foreach($films as $film) {
		if($film["name"] == $name) {
			$found_film = $film;
		}
	}
	return $found_film;	
}

function get_film_by_id($id) {
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if(mysqli_connect_error()) {
		echo "Error connecting to database: " . mysqli_connect_error();
		exit();
	}
	
	$sql = "SELECT * FROM films WHERE id = $id";
	$result = mysqli_query($con, $sql);	
	$row = $result->fetch_assoc();
	$film = array("id" => $row["id"], "name" => $row["name"], "description" => $row["description"], "rating" => $row["rating"], "year" => $row["year"]);
	return $film;	
}

function update_film($film) {
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_errno()) 
	{
		echo "Error connecting to database: " . mysqli_connect_error();
		exit();
	}

	$sql = "UPDATE films SET name='$film[name]', description='$film[description]', rating=$film[rating],year=$film[year] WHERE id=$film[id]";

	$ok = false;
	if ($con->query($sql) === TRUE) {
	    $ok = true;
	} else {
		printf("Could not execute query!");
		die();
	    $ok = false;
	}
	mysqli_close($con);
	return $ok;
}

function insert_film($film) {
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_errno()) 
	{
		printf("Connection failed: %s\n", mysqli_connect_error());
		exit();
	}

	$sql = "INSERT INTO films (name, description, rating, year) VALUES ('$film[name]', '$film[description]', $film[rating],$film[year])";

	$ok = false;
	if ($con->query($sql) === TRUE) {
	    $ok = true;
	} else {
		printf("Could not execute query!");
		die();
	    $ok = false;
	}
	mysqli_close($con);
	return $ok;
}

?>