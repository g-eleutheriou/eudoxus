<?php

class User {
	private $id;
	private $name;
	private $surname;
	private $username;
	private $password;
	private $phone;
	private $type;
	private $email;

	public function __construct($name, $surname, $username, $password, $phone, $type, $email, $id) {
		if (!self::isValidUsername($username)) {
			die("username can't be empty");
		}

		if (!self::isValidPassword($password)) {
			die("password must be at least 6 chars long");
		}

		$this -> id = $id;
		$this -> name = $name;
		$this -> surname = $surname;
		$this -> username = $username;
		$this -> password = $password;
		$this -> phone = $phone;
		$this -> type = $type;
		$this -> email = $email;
	}

	public function __get($param) {
		switch ($param) {
			case "id" :
				return $this -> id;
			case "name" :
				return $this -> name;
			case "surname" :
				return $this -> surname;
			case "phone" :
				return $this -> phone;
			case "username" :
				return $this -> username;
			case "password" :
				return $this -> password;
			case "email" :
				return $this -> email;
			case "type" :
				return $this -> type;
		}
	}

	public function __set($param, $value) {
		switch ($param) {
			case "id" :
				$this -> id = $value;
				break;
			case "username" :
				if (self::isValidUsername($value)) {
					$this -> username = $value;
				}
				break;
			case "password" :
				if (self::isValidPassword($value)) {
					$this -> password = $value;
				}
				break;
			case "phone" :
				$this -> phone = $value;
				break;
			case "name" :
				$this -> name = $value;
				break;
			case "surname" :
				$this -> surname = $value;
				break;
			case "email" :
				$this -> email = $value;
				break;
			case "type" :
				$this -> type = $value;
				break;
		}
	}

	public static function isValidUsername($username) {
		if ($username == null || $username == "") {
			return false;
		}
		return true;
	}

	public static function isValidPassword($password) {
		if ($password == null || strlen($password) < 2) {
			return false;
		}
		return true;
	}

}
