<?php
include "protected/config.php";
include "model/film.class.php";
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
		$films[] = new Film($row);
	}
	return $films;
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
	$film = new Film($row);
	return $film;	
}

function update_film($film) {
	$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
	if (mysqli_connect_errno()) 
	{
		echo "Error connecting to database: " . mysqli_connect_error();
		exit();
	}

	$id = $film->getId();
	$name = $film->getName();
	$description = $film->getDescription();
	$rating = $film->getRating();
	$year = $film->getYear();
	$sql = "UPDATE films SET name='$name', description='$description', rating=$rating,year=$year WHERE id=$id";

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

	$id = $film->getId();
	$name = $film->getName();
	$description = $film->getDescription();
	$rating = $film->getRating();
	$year = $film->getYear();
	$sql = "INSERT INTO films (name, description, rating, year) VALUES ('$name', '$description', $rating,$year)";

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