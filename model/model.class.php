<?php

class Model {
	
	private $id;
	private $createdAt;
	private $lastUpdated;

	public function getId() {
		return $this->id;
	}

	public function setId($id) {
		$this->id = $id;
	}

	public function getCreatedAt() {
		$date = date_create(date("Y-m-d h:i:s"));
		$diff = date_diff(date_create($this->createdAt), $date);
		return $diff->format("%d days ago");
	}

	public function setCreatedAt($createdAt) {
		$this->createdAt = $createdAt;
	}

	public function getLastUpdated() {
		$date = date_create(date("Y-m-d h:i:s"));
		$diff = date_diff(date_create($this->lastUpdated), $date);
		return $diff->format("%d days ago");
	}

	public function setLastUpdated($lastUpdated) {
		$this->lastUpdated = $lastUpdated;
	}
}