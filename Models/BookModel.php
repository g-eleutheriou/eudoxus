<?php

require_once ("Model.php");
require_once ("entities/Book.php");
require_once ("entities/Connector.php");

class BookModel extends Model {
	public function __construct() {
		parent::__construct();
	}

	public static function getBooks() {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("SELECT * FROM Book");
			$stmt -> execute();

			$booksColumns = $stmt -> fetchAll();

			$bookObjArray = array();

			foreach ($booksColumns as $bookCol) {

				$bookObjArray[] = new Book($bookCol['id'], $bookCol['name'], $bookCol['year'], $bookCol['writer']);
			}

			return $bookObjArray;
		} catch(PDOException $e) {
			throw $e;
			//    echo $e->getMessage();
		}
	}

	public static function getBookByName($name) {
		$pdo = Connector::getPDO();

		try {
			$stmt = $pdo -> prepare("SELECT * FROM Book WHERE name = :name");

			$stmt -> bindValue(":name", $name);
			$stmt -> execute();

			$booksColumns = $stmt -> fetchAll();

			$bookObjArray = array();

			foreach ($booksColumns as $bookCol) {

				$bookObjArray[] = new Book($bookCol['id'], $bookCol['name'], $bookCol['year'], $bookCol['writer']);
			}

			return $bookObjArray;
		} catch(PDOException $e) {
			throw $e;
			//      echo $e->getMessage();
		}
	}

}
