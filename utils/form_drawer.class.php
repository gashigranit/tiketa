<?php

class FormDrawer {

	private $element;

	public function __construct(View $element) {
		$this->element = $element;
	}

	public function draw() {
		$html = "";

		$html .= "<table class='table'>";

		$html .= "<tbody>";
		$html .= $this->element->generateSingleView();
		$html .= "</tbody>";

		$html .= "</table>";
		echo $html;
	}
}


