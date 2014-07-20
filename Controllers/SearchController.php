<?php

require_once 'Controller.php';
require_once 'Models/UserModel.php';
require_once 'Models/entities/User.php';
require_once 'Models/BookModel.php';
require_once 'Models/entities/Book.php';

/**
 * Controller for users
 */
class SearchController extends Controller {
	public function __construct() {
		parent::__construct();
	}

	public function search() {

		try {
			$this -> view -> render('page', 'searchResults', BookModel::getBookByName($_GET['name']));
		} catch(Exception $ex) {
			require_once 'PageController.php';
			$page = new PageController;
			$page -> error($ex -> getMessage());
		}
	}

}

