<?php

$student1 = [
	"id" => 1,
	"name" => "John",
	"lastName" => "John",
	"subjects" => [
		"Web Programming" , "Mobile Development"
	]
];

$student2 = [
	"id" => 2,
	"name" => "Dohn",
	"lastName" => "Joe",
	"subjects" => [
		"Java" , "Architecture"
	]
];

$students = [];
$students[] = $student1;
$students[] = $student2;

//header("Content-Type: application/json");
$json = json_encode($student1);
echo $json;

?>