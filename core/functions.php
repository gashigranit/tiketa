<?php

$films = [
	[
	  "id" => 1,
	  "name" => "Wonder Woman",
	  "description" => "Before she was Wonder Woman (Gal Gadot), she was Diana, princess of the Amazons, trained to be an unconquerable warrior. Raised on a sheltered island paradise...",
	  "rating" => "5/5",
	  "year" => 2017
	],
	[
	  "id" => 2,
	  "name" => "Blade Runner",
	  "description" => "Deckard (Harrison Ford) is forced by the police Boss (M. Emmet Walsh) to continue his old job as Replicant Hunter. His assignment: eliminate four escaped Replicants from the colonies who have returned to Earth...",
	  "rating" =>  "5/5",
	  "year" => 2017
	],
	[
	  "id" => 3,
	  "name" => "Justice League",
	  "description" => "Fueled by his restored faith in humanity and inspired by Superman's selfless act, Bruce Wayne enlists newfound ally Diana Prince to face an even greater threat...",
	  "rating" =>  "5/5",
	  "year" => 2017
	],
	[
	  "id" => 4,
	  "name" => "Dunkirk",
	  "description" => "In May 1940, Germany advanced into France, trapping Allied troops on the beaches of Dunkirk...",
	  "rating" =>  "5/5",
	  "year" => 2017
	],
];

function get_all_films() {	

	// TODO: Get films from database
	global $films;
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
	// TODO: Get film from database
	
	global $films;	
	$found_film = [];
	foreach($films as $film) {
		if($film["id"] == $id) {
			$found_film = $film;
		}
	}
	return $found_film;	
}

function update_film($film) {
	// TODO: Update film in the database
}

?>