<?php

class Publication {
	private $id;
	private $name;
	private $phone;
	private $address;

	public function __construct($id, $name, $phone, $address) {

		$this -> id = $id;
		$this -> name = $name;
		$this -> phone = $phone;
		$this -> address = $address;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "name" :
				return $this -> name;
			case "phone" :
				return $this -> phone;
			case "address" :
				return $this -> address;
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
			case "name" :
				$this -> name = $value;
				break;
			case "address" :
				$this -> address = $value;
				break;
		}
	}

}
