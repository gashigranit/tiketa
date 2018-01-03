<?php
include_once "model/model.class.php";
include_once "model/view.interface.php";

class User extends Model implements View {
	
	private $username;
	private $passwordHash;
	private $name;

	static $tableHeader = "
			<thead>
                <th>Emri</th>
                <th>Perdoruesi</th>
            </thead>";

	function __construct($row = []) {

		parent::setId($row["id"]);
		parent::setCreatedAt($row["created_at"]);
		parent::setLastUpdated($row["last_updated"]);

		$this->name = $row["name"];
		$this->passwordHash = $row["password_hash"];
		$this->username = $row["username"];
	}

	public static function getTableHeader() {
		return self::$tableHeader;
	}

	public function generateTableRow() {
		$html = "";

		$html .= "<tr>";

		$html .= "<td><a href=\"film_details.php?id=";
		$html .= $this->getId();
		$html .= "\"</a>";
		$html .= $this->name;
		$html .= "</td>";


		$html .= "<td>";
		$html .= $this->description;
		$html .= "</td>";

		$html .= "</tr>";

		return $html;
	}

	public function generateSingleView() {
		$html = "";

		$html .= "<table class=\"table\">";

		$html .= "<tr>";
		$html .= "<td>Emri</td>";
		$html .= "<td>";
		$html .= $this->name;
		$html .= "</td>";
		$html .= "</tr>";

		$html .= "<tr>";
		$html .= "<td>Perdoruesi</td>";
		$html .= "<td>";
		$html .= $this->username;
		$html .= "</td>";
		$html .= "</tr>";		

		$html .= "</table>";

		return $html;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($name) {
		$this->name = $name;
	}

	public function getPasswordHash() {
		return $this->passwordHash;
	}

	public function setPasswordHash($passwordHash) {
		$this->passwordHash = $passwordHash;
	}

	public function getUsername() {
		return $this->username;
	}

	public function setUsername($username) {
		$this->username = $username;
	}
}

