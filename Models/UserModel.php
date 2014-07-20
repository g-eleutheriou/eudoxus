<?php

require_once ("Model.php");
require_once ("entities/User.php");
require_once ("entities/Connector.php");

class UserModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public static function create($userObj) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("INSERT INTO User
                                    (name, surname, username, password, type, email, phone)
                                   VALUES
                                    (:name, :surname, :username, :password, :type, :email, :phone)");

			$stmt -> bindValue(":name", $userObj -> name);
			$stmt -> bindValue(":surname", $userObj -> surname);
			$stmt -> bindValue(":password", static::getHash($userObj -> password));
			$stmt -> bindValue(":type", $userObj -> type);
			$stmt -> bindValue(":email", $userObj -> email);
			$stmt -> bindValue(":phone", $userObj -> phone);
		//	$stmt -> bindValue(":department", $userObj -> department);
			$stmt -> bindValue(":username", $userObj -> username);
			$stmt -> execute();
		} catch(PDOException $e) {
			throw $e;
			//   echo $e->getMessage();
		}
	}

	public static function update($userObj) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("UPDATE User SET
                                    username = :username,
                                    password = :password,
                                    email = :email,
									phone = :phone
                                  WHERE id = :id");

			$stmt -> bindValue(":username", $userObj -> username);
			$stmt -> bindValue(":password", static::getHash($userObj -> password));
			$stmt -> bindValue(":email", $userObj -> email);
			$stmt -> bindValue(":phone", $userObj -> phone);
			$stmt -> bindValue(":id", $userObj -> id);
			$stmt -> execute();
		} catch (PDOException $e) {
			throw $e;
			//   echo $e->getMessage();
		}
	}

	public static function delete($id) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("DELETE FROM User WHERE id = :id");

			$stmt -> bindValue(":id", $id);
			$stmt -> execute();
		} catch(PDOException $e) {
			throw $e;
			//  echo $e->getMessage();
		}
	}

	public static function getUsers() {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("SELECT * FROM User");
			$stmt -> execute();

			$usersColumns = $stmt -> fetchAll();

			$userObjArray = array();

			foreach ($usersColumns as $userCol) {

				$userObjArray[] = new User($userCol['id'], $userCol['name'], $userCol['surname'], $userCol['username'], $userCol['password'], $userCol['phone'], $userCol['type'], $userCol['email']);
			}

			return $userObjArray;
		} catch(PDOException $e) {
			throw $e;
			//    echo $e->getMessage();
		}
	}

	public static function getUserById($id) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("SELECT * FROM User WHERE id = :id");

			$stmt -> bindValue(":id", $id);
			$stmt -> execute();

			$userCol = $stmt -> fetch(PDO::FETCH_ASSOC);

			return new User($userCol['id'], $userCol['name'], $userCol['surname'], $userCol['username'], $userCol['password'], $userCol['phone'], $userCol['type'], $userCol['email']);
		} catch(PDOException $e) {
			throw $e;
			//      echo $e->getMessage();
		}
	}

	public static function getUserByUsername($username) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("SELECT * FROM User WHERE username = :username");

			$stmt -> bindValue(":username", $username);
			$stmt -> execute();

			$userCol = $stmt -> fetch(PDO::FETCH_ASSOC);

			if ($userCol == null) {
				return null;
			}

			return new User($userCol['name'], $userCol['surname'], $userCol['username'], $userCol['password'], $userCol['phone'], $userCol['type'], $userCol['email'], $userCol['id']);

		} catch(PDOException $e) {
			throw $e;
			//echo $e->getMessage();
		}
	}

	public static function getHash($password) {

		$pdo = Connector::getPDO();

		try {

			$stmt = $pdo -> prepare("SELECT SHA(:password)");

			$stmt -> bindValue(":password", $password);
			$stmt -> execute();

			return $stmt -> fetchColumn();
		} catch(PDOException $e) {
			throw $e;
			//echo $e->getMessage();
		}

		return NULL;
	}

}
