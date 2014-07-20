<?php

class Department {
	private $id;
	private $name;


	public function __construct($id, $name) {

		$this -> id = $id;
		$this -> name = $name;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "name" :
				return $this -> name;
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
		}
	}

}
