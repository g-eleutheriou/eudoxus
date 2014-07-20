<?php

class Book {
	private $id;
	private $name;
	private $year;
	private $writer;

	public function __construct($id, $name, $year, $writer) {

		$this -> id = $id;
		$this -> name = $name;
		$this -> year = $year;
		$this -> writer = $writer;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "name" :
				return $this -> name;
			case "year" :
				return $this -> year;
			case "writer" :
				return $this -> writer;
		}
	}

	public function __set($param, $value) {
		switch ($param) {
			case "id" :
				$this -> id = $value;
				break;
			case "phone" :
				$this -> phone = $value;
				break;
			case "year" :
				$this -> year = $value;
				break;
			case "writer" :
				$this -> writer = $value;
				break;
		}
	}

}
