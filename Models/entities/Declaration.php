<?php

class Declaration {
	private $id;
	private $date;
	private $status;

	public function __construct($id, $date, $status) {

		$this -> id = $id;
		$this -> date = $date;
		$this -> status = $status;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "date" :
				return $this -> date;
			case "status" :
				return $this -> status;
		}
	}

	public function __set($param, $value) {
		switch ($param) {
			case "id" :
				$this -> id = $value;
				break;
			case "date" :
				$this -> date = $value;
				break;
			case "status" :
				$this -> status = $value;
				break;
		}
	}

}
