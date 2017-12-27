<?php

include_once "model/model.class.php";
include_once "model/view.interface.php";

class Play extends Model implements View {
	
	private $name;
	private $description;
	private $date;
	private $location;

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getDescription() {
		return $this->description;
	}

	public function setDescription($description) {
		$this->description = $description;
	}

	public function getDate() {
		return $this->date;
	}

	public function setDate($date) {
		$this->date = $date;
	}

	public function getLocation() {
		return $this->location;
	}

	public function setLocation($location) {
		$this->location = $location;
	}

	public function generateTableRow() {
		return "";
	}

	public function generateSingleView() {
		return "";
	}

}