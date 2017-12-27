<?php

class Film {
	
	private $id;
	private $name;
	private $description;
	private $rating;
	private $year;

	static $tableHeader = "
			<thead>
                <th>Emri</th>
                <th>Pershkrimi</th>
                <th>Vleresimi</th>
                <th>Viti</th>
            </thead>";

	function __construct($row = []) {

		$this->id = $row["id"];
		$this->name = $row["name"];
		$this->description = $row["description"];
		$this->rating = $row["rating"];
		$this->year = $row["year"];		
	}

	public static function getTableHeader() {
		return self::$tableHeader;
	}

	public function generateTableRow() {
		$html = "";

		$html .= "<tr>";

		$html .= "<td><a href=\"film_details.php?id=";
		$html .= $this->id;
		$html .= "\"</a>";
		$html .= $this->name;
		$html .= "</td>";


		$html .= "<td>";
		$html .= $this->description;
		$html .= "</td>";


		$html .= "<td>";
		$html .= $this->rating;
		$html .= "</td>";


		$html .= "<td>";
		$html .= $this->year;
		$html .= "</td>";		

		$html .= "</tr>";

		return $html;
	}

	public function generateSingleView() {
		$html = "";

		$html .= "<table class=\"table\">";

		$html .= "<tr>";
		$html .= "<td>Name</td>";
		$html .= "<td>";
		$html .= $this->name;
		$html .= "</td>";
		$html .= "</tr>";

		$html .= "<tr>";
		$html .= "<td>Description</td>";
		$html .= "<td>";
		$html .= $this->description;
		$html .= "</td>";
		$html .= "</tr>";

		$html .= "<tr>";
		$html .= "<td>Rating</td>";
		$html .= "<td>";
		$html .= $this->rating;
		$html .= "</td>";
		$html .= "</tr>";

		$html .= "<tr>";
		$html .= "<td>Year</td>";
		$html .= "<td>";
		$html .= $this->year;
		$html .= "</td>";
		$html .= "</tr>";		

		$html .= "</table>";

		return $html;
	}

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

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

	public function getRating() {
		return $this->rating;
	}

	public function setRating($rating) {
		$this->rating = $rating;
	}

	public function getYear() {
		return $this->year;
	}

	public function setYear($year) {
		$this->year = $year;
	}
}

