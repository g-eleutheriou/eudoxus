<?php

class Curse {
	private $id;
	private $name;
	private $semester;

	public function __construct($id, $name, $semester) {

		$this -> id = $id;
		$this -> name = $name;
		$this -> semester = $semester;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "name" :
				return $this -> name;
			case "semester" :
				return $this -> semester;
		}
	}

	public function __set($param, $value) {
		switch ($param) {
			case "id" :
				$this -> id = $value;
				break;
			case "name" :
				$this -> name = $value;
				break;
			case "semester" :
				$this -> semester = $value;
				break;
		}
	}

}
