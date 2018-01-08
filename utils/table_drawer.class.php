<?php

class TableDrawer {

	private $elements;
	private $header;

	public function __construct($header, $elements) {
		$this->header = $header;
		$this->elements = $elements;
	}

	public function draw() {
		$html = "";

		$html .= "<table class='table'>";
		$html .= "<thead>";
		$html .= $this->header;
		$html .= "</thead>";

		$html .= "<tbody>";

		foreach($this->elements as $element) {
			$html .= $element->generateTableRow();
		}

		$html .= "</tbody>";

		$html .= "</table>";
		echo $html;
	}

}


